<?php

namespace SmartDev\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VersionProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomVersionProduit','text',array('label'=>'Nom de la version','required' => true))
            ->add('dateVersionProduit','datetime',array('label'=>'Date de la Version','required' => true))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SmartDev\MainBundle\Entity\VersionProduit'
        ));
    }

    public function getName()
    {
        return 'smartdev_mainbundle_versionproduittype';
    }
}
