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
            ->add('descriptionComposant')
            ->add('visibiliteComposant')
            ->add('etatComposant')
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
