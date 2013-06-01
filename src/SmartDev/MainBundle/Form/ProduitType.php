<?php

namespace SmartDev\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           ->add('titreProduit','text', array('label' => 'Titre du produit','required' => true))
           ->add('descriptionproduit','textarea', array('label' => 'Déscripotion du produit','required' => true))
           ->add('visibiliteproduit','choice',
                 array('label' => 'Visibilité du produit',
             'choices' => array('o' => 'Oui', 'n' => 'Non'),
             'expanded' => true,
             'multiple' => false)
            )
             ->add('IdVersionProduit',
                    'choice', array('label' => 'Version du produit',
             'choices' => array('v1' => 'V1.0', 'v2' => 'V2.0','v3' => 'V3.0'),
             
     ))   
            ->add('idTypeProduit','choice', array('label' => 'Type du Produit',
    'choices' => array('exe' => 'EXE', 'lib' => 'LIB', 'txt' => 'TXT','jar','JAR'),
    'preferred_choices' => array('lib'),
))
            ->add('idNatureProduit','choice', array('label' => 'Nature du Produit',
    'choices' => array('DEV' => 'DEV', 'DESIGN' => 'DESIGN', 'GEST' => 'GESTION','AUTRE'=>'AUTRE'),
    'preferred_choices' => array('lib'),
))
            ->add('idLicenceProduit', 'choice', array('label' => 'Licence du Produit',
    'choices' => array('GNU' => 'GNU', 'FREE' => 'FREE', 'SHARE' => 'SHARE'),
    'preferred_choices' => array('GNU'),
))
            ->add('idProgrammeProduit', 'choice', array('label' => 'Programme du Produit',
    'choices' => array('VS' => 'Visual Studio', 'NETB' => 'NetBeans', 'IDEE' => 'IDE Eclipse'),
))
            ->add('idEtatProduit',
                   'choice', array('label' => 'Etat du Produit',
             'choices' => array('NonDebut' => 'Non Debut', 'encours' => 'En Cours','Terminer' => 'Terminer'),
                       ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SmartDev\MainBundle\Entity\Produit'
        ));
    }

    public function getName()
    {
        return 'smartdev_mainbundle_produittype';
    }
}
