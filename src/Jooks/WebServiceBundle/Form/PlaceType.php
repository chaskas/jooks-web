<?php

namespace Jooks\WebServiceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PlaceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('website')
            ->add('facebook')
            ->add('twitter')
            ->add('phone')
            ->add('contactName')
            ->add('contactPhone')
            ->add('contactEmail')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jooks\WebServiceBundle\Entity\Place'
        ));
    }

    public function getName()
    {
        return 'jooks_webservicebundle_placetype';
    }
}
