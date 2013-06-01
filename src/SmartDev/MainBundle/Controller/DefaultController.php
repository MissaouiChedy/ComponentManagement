<?php

namespace SmartDev\MainBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SmartDev\MainBundle\Entity\Composant;
use SmartDev\MainBundle\Form\ComposantType;
use SmartDev\MainBundle\Entity\Produit;
use SmartDev\MainBundle\Form\ProduitType;
use SmartDev\MainBundle\Entity\licence;
use SmartDev\MainBundle\Form\LicenceType;
use SmartDev\MainBundle\Entity\NatureComposant;
use SmartDev\MainBundle\Form\NatureComposantType;
use SmartDev\MainBundle\Entity\NtureProduit;
use SmartDev\MainBundle\Form\NtureProduitType;
use SmartDev\MainBundle\Entity\VersionCmposant;
use SmartDev\MainBundle\Form\VersionCmposantType;
use SmartDev\MainBundle\Entity\VersionProduit;
use SmartDev\MainBundle\Form\VersionProduitType;
use SmartDev\MainBundle\Entity\ProgrammeProduit;
use SmartDev\MainBundle\Form\ProgrammeProduitType;
use SmartDev\MainBundle\Entity\TypeProduit;
use SmartDev\MainBundle\Form\TypeProduitType;
use SmartDev\MainBundle\Entity\TypeComposant;
use SmartDev\MainBundle\Form\TypeComposantType;
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
    
     public function ajouter_produitAction()
    {
   
        $prod=$this->getDoctrine()->getEntityManager();
        //$form=$this->createForm(new ComposantType(), );
        $produ=new Produit;
        $form=$this->createForm(new ProduitType());
        $request=$this->getRequest();
        
        $form->bindRequest($request);
        if($form->isValid())
            {
            
            $produ=$form->getData();
            $prod->persist($produ);
            $prod->flush();
            }
        
        return $this->render('SmartDevMainBundle:Default:ajouter_produit.html.twig', array('form'=>$form->createView()));
    }
    
     public function ajouter_licenceAction()
    {
   
        $lic=$this->getDoctrine()->getEntityManager();
        $lice=new Produit;
        $form=$this->createForm(new LicenceType());
        $request=$this->getRequest();
        
        $form->bindRequest($request);
        if($form->isValid())
            {
            
            $produ=$form->getData();
            $lic->persist($lice);
            $lic->flush();
            }
        
        return $this->render('SmartDevMainBundle:Default:ajouter_licence.html.twig', array('form'=>$form->createView()));
    }
     public function ajouter_nature_composantAction()
    {
   
        $nat=$this->getDoctrine()->getEntityManager();
        $natu=new NatureComposant;
        $form=$this->createForm(new NatureComposantType());
        $request=$this->getRequest();
        
        $form->bindRequest($request);
        if($form->isValid())
            {
            
            $natu=$form->getData();
            $nat->persist($natu);
            $nat->flush();
            }
        
        return $this->render('SmartDevMainBundle:Default:ajouter_nature_composant.html.twig', array('form'=>$form->createView()));
    }
     public function ajouter_nature_produitAction()
    {
   
        $natp=$this->getDoctrine()->getEntityManager();
        $natup=new NtureProduit;
        $form=$this->createForm(new NtureProduitType());
        $request=$this->getRequest();
        
        $form->bindRequest($request);
        if($form->isValid())
            {
            
            $natup=$form->getData();
            $natp->persist($natup);
            $natp->flush();
            }
        
        return $this->render('SmartDevMainBundle:Default:ajouter_nature_produit.html.twig', array('form'=>$form->createView()));
    }
     public function ajouter_version_produitAction()
    {
   
        $verspr=$this->getDoctrine()->getEntityManager();
        $verspro=new VersionProduit;
        $form=$this->createForm(new VersionProduitType());
        $request=$this->getRequest();
        
        $form->bindRequest($request);
        if($form->isValid())
            {
            
            $verspro=$form->getData();
            $verspr->persist($verspro);
            $$verspr->flush();
            }
        
        return $this->render('SmartDevMainBundle:Default:ajouter_produit_version.html.twig', array('form'=>$form->createView()));
    }
     public function ajouter_version_composantAction()
    {
   
        $verscomp=$this->getDoctrine()->getEntityManager();
        $verscompo=new VersionCmposant;
        $form=$this->createForm(new VersionCmposantType());
        $request=$this->getRequest();
        
        $form->bindRequest($request);
        if($form->isValid())
            {
            $form->getData();
            $verscomp->persist($verscompo);
            $verscomp->flush();
            }
        
        return $this->render('SmartDevMainBundle:Default:ajouter_composant_version.html.twig', array('form'=>$form->createView()));
    }
    public function ajouter_programme_produitAction()
    {
   
        $progpr=$this->getDoctrine()->getEntityManager();
        $progpro=new ProgrammeProduit;
        $form=$this->createForm(new ProgrammeProduitType());
        $request=$this->getRequest();
        
        $form->bindRequest($request);
        if($form->isValid())
            {
            $form->getData();
           $progpr->persist($progpro);
            $progpr->flush();
            }
        
        return $this->render('SmartDevMainBundle:Default:ajouter_programme_produit.html.twig', array('form'=>$form->createView()));
    }
     public function ajouter_type_produitAction()
    {
   
        $typpr=$this->getDoctrine()->getEntityManager();
        $typpro=new TypeProduit ;
        $form=$this->createForm(new TypeProduitType());
        $request=$this->getRequest();
        
        $form->bindRequest($request);
        if($form->isValid())
            {
            $form->getData();
           $typpr->persist($typpro);
            $typpr->flush();
            }
        
        return $this->render('SmartDevMainBundle:Default:ajouter_type_produit.html.twig', array('form'=>$form->createView()));
    }
     public function ajouter_type_composantAction()
    {
   
        $typcomp=$this->getDoctrine()->getEntityManager();
        $typcompo=new TypeComposant ;
        $form=$this->createForm(new TypeComposantType());
        $request=$this->getRequest();
        
        $form->bindRequest($request);
        if($form->isValid())
            {
            $form->getData();
           $typcomp->persist($typcompo);
            $typcomp->flush();
            }
        
        return $this->render('SmartDevMainBundle:Default:ajouter_type_composant.html.twig', array('form'=>$form->createView()));
    }
    
    
}
