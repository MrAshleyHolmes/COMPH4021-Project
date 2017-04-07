<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class RegisterController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @Route("/register")
     * @Template("AppBundle:Pages:register.html.twig")
     */
    public function registerAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->remove('isAdmin');
        $form->add('submit', SubmitType::class, array(
            'label' => 'Register',
            'attr' => array('class' => 'btn btn-default btn-lg')
        ));

        /*$request = $this->getDoctrine()->getManager();*/
        $form->handleRequest($request);

        if ('POST' === $request->getMethod()) {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $this->get('app_bundle.user_manager')
                    ->setUserPassword($user, $user->getPassword());
                $user->setRoles(array('ROLE_USER'));
                $user->setIsAdmin(false);
                $em->persist($user);
                $em->flush();

                $request->getSession()
                    ->getFlashbag()
                    ->add('success', 'You are now registered, proceed to login');

                return $this->redirect($this->generateUrl('login_route'));
            }
            return $this->render('user/register.html.twig', array(
                'user' => $user,
                'form' => $form->createView(),
            ));
        }

        return $this->render('user/register.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
        ));
    }
}
