<?php

namespace SmartDev\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VersionCmposantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomVersion','text',array('label'=>'Nomd de la version','required' => true))
            ->add('dateVersion','datetime',array('label'=>'Date de la Version','required' => true))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SmartDev\MainBundle\Entity\VersionCmposant'
        ));
    }

    public function getName()
    {
        return 'smartdev_mainbundle_versioncmposanttype';
    }
}
