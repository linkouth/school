<?php

namespace AppBundle\Form;

use AppBundle\Entity\Student;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StudentType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('age', null, array('label' => 'Age'))
            ->add('email', null, array('label' => 'Email'))
            ->add('role', null, array('label' => 'Role'))
            ->add('password', null, array('label' => 'Password'))
            ->add('salt', null, array('label' => 'Salt'))
            ->add('name', null, array('label' => 'Name'))
            ->add('surname', null, array('label' => 'Surname'))
            ->add('university', null, array('label' => 'University'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Student::class
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_student';
    }


}
