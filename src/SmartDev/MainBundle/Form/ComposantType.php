<?php

namespace SmartDev\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ComposantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titreComposant')
            ->add('descriptionComposant','textarea')
            ->add('visibiliteComposant','choice',
                 array(
             'choices' => array('o' => 'Oui', 'n' => 'Non'),
             'expanded' => true,
             'multiple' => false)    
            )
            ->add('idLicenceComposant', 'choice', array(
    'choices' => array('GNU' => 'GNU', 'FREE' => 'FREE', 'SHARE' => 'SHARE'),
    'preferred_choices' => array('GNU'),
))
            ->add('idTypeComposant','choice', array(
    'choices' => array('exe' => 'EXE', 'lib' => 'LIB', 'txt' => 'TXT','jar','JAR'),
    'preferred_choices' => array('lib'),
))
            ->add('idNatureComposant','choice', array(
    'choices' => array('DEV' => 'DEV', 'DESIGN' => 'DESIGN', 'GEST' => 'GESTION','AUTRE'=>'AUTRE'),
    'preferred_choices' => array('lib'),
))
            ->add('idEtatComposant',
                   'choice', array(
             'choices' => array('NonDebut' => 'Non Debut', 'encours' => 'En Cours','Terminer' => 'Terminer'),
                       ))
                ->add('IdVersionComposant',
                    'choice', array(
             'choices' => array('v1' => 'V1.0', 'v2' => 'V2.0','v3' => 'V3.0'),
             
     ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SmartDev\MainBundle\Entity\Composant'
        ));
    }

    public function getName()
    {
        return 'smartdev_mainbundle_composanttype';
    }
}
