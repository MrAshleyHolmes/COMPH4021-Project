<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Semester;
use AppBundle\Form\ExamFormType;
use Faker;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class PagesController extends Controller
{
    /**
     * @Route("/contact")
     */
    public function contactAction()
    {
        return $this->render('AppBundle:Pages:contact.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/profile")
     */
    public function profileAction()
    {
        return $this->render('AppBundle:Pages:profile.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/about")
     */
    public function aboutAction()
    {
        return $this->render('AppBundle:Pages:about.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/orders")
     */
    public function ordersAction(Request $request)
    {
        /*$faker = Faker\Factory::create();*/
        $form = $this->createForm(ExamFormType::class);

        // Only handles data on POST
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /*dump($form->getData());die;*/
            $semester = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($semester);
            $em->flush();

            $this->addFlash('success', 'Exam paper created - you are amazing!');
            
            return $this->redirectToRoute('admin_index');
        }

        return $this->render('AppBundle:Pages:orders.html.twig', [
            'examForm' => $form->createView()
        ]);
    }
}
