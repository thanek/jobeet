<?php

namespace my\JobeetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('myJobeetBundle:Default:index.html.twig', array('name' => $name));
    }
}
