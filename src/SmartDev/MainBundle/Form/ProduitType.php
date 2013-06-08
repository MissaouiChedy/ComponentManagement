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
            ->add('titre')
            ->add('description')
            ->add('visibilite')
            ->add('etat')
            ->add('licence')
            ->add('typeProduit')
            ->add('natureProduit')
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
