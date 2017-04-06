<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

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
    public function ordersAction()
    {
        return $this->render('AppBundle:Pages:orders.html.twig', array(
            // ...
        ));
    }

}
