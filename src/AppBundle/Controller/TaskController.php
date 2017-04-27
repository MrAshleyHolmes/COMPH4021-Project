<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tag;
use AppBundle\Entity\Task;
use AppBundle\Form\TaskType;
use Doctrine\Common\Collections\ArrayCollection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TaskController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/task", name="app_pages_task")
     */
   public function newAction(Request $request)
    {
        $task = new Task();

        // dummy code - this is here just so that the Task has some tags
        // otherwise, this isn't an interesting example

        $tag1 = new Tag();
        $tag1->setPart('Insert here');
        $task->getTags()->add($tag1);
        $tag2 = new Tag();
        $tag2->setPart('Insert here');
        $task->getTags()->add($tag2);

        // end dummy code

        $form = $this->createForm(TaskType::class, $task, array(
            'action' => $this->generateUrl('app_pages_task', array('tags' => $task->getTags())),
            'method' => 'POST',
        ));

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // ... maybe do some form processing, like saving the Task and Tag objects
            /*exit(\Doctrine\Common\Util\Debug::dump($task));*/
            $em = $this->getDoctrine()->getManager();

/*            $em->persist($tag1);
            $em->persist($tag2);*/
            $em->persist($task);
            $em->flush();

            $this->addFlash('success', 'Exam paper created - you are amazing!');

        }

        return $this->render('AppBundle:Task:task.html.twig', array(
            'form' => $form->createView(),
        ));
    }

// ...
    /**
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     *
     *@Route("/{id}/task_edit", name="task_edit")
     */
    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $task = $em->getRepository('AppBundle:Task')->find($id); /** @var $task Task */

        $form = $this->createForm(TaskType::class, $task, array(
            'action' => $this->generateUrl('app_pages_task', array('tags' => $task->getTags())),
            'method' => 'POST',
        ));

        if (!$task) {
            throw $this->createNotFoundException('No task found for id '.$id);
        }

        $originalTags = new ArrayCollection();

        // Create an ArrayCollection of the current Tag objects in the database
        foreach ($task->getTags() as $tag) { /** @var $originalTags Tag */
            $originalTags->add($tag);
            /*exit(\Doctrine\Common\Util\Debug::dump($task));*/
        }

        $editForm = $this->createForm(TaskType::class, $task);

        $editForm->handleRequest($request);

        if ($editForm->isValid()) {

            // remove the relationship between the tag and the Task
            foreach ($originalTags as $tag) {
                if (false === $task->getTags()->contains($tag)) {
                    // remove the Task from the Tag
                    $tag->getTasks()->removeElement($task);

                    // if it was a many-to-one relationship, remove the relationship like this
                    $tag->setTask(null);
                    // $tag->setTask(null);

                    $em->persist($tag);

                    // if you wanted to delete the Tag entirely, you can also do that
                    $em->remove($tag);
                    // $em->remove($tag);
                }
            }

            $em->persist($task);
            $em->flush();

            // redirect back to some edit page
            return $this->redirectToRoute('task_edit', array('id' => $id));
        }

        return $this->render('AppBundle:Task:task.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
