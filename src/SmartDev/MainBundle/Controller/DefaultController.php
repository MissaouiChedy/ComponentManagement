<?php

namespace SmartDev\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SmartDevMainBundle:Default:index.html.twig', 
        		array('componentLink' => $this->generateUrl("smart_dev_main_componentsDisplayPage"), 
        				'productLink'=> $this->generateUrl("smart_dev_main_productsDisplayPage"))
     );
    }
}
