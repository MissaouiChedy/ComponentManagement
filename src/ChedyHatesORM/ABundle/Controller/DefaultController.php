<?php

namespace ChedyHatesORM\ABundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ChedyHatesORMABundle:Default:index.html.twig', array('name' => $name));
    }
}
