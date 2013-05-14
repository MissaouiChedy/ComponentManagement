<?php

namespace SmartDev\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SmartDev\MainBundle\Entity\Composant;
use SmartDev\MainBundle\Form\ComposantType;
use SmartDev\MainBundle\Entity\licence;
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SmartDevMainBundle:Default:index.html.twig', 
        		array('componentLink' => $this->generateUrl("smart_dev_main_componentsDisplayPage"), 
        				'productLink'=> $this->generateUrl("smart_dev_main_productsDisplayPage"))
     );
    }
    
     public function ajouter_composantAction()
    {
   
        $comp=$this->getDoctrine()->getEntityManager();
        //$form=$this->createForm(new ComposantType(), );
        $compo=new Composant();
        $form=$this->createForm(new ComposantType());
        $request=$this->getRequest();
        
        $form->bindRequest($request);
        if($form->isValid())
            {
            
            $compo=$form->getData();
            $comp->persist($compo);
            $comp->flush();
            }
        
        return $this->render('SmartDevMainBundle:Default:ajouter_composant.html.twig', array('form'=>$form->createView()));
    }
    
    
    
    
}
