<?php

namespace AppBundle\Form;

use AppBundle\Entity\Employee;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmployeeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('position', null, array('label' => 'Position'))
            ->add('email', null, array('label' => 'Email'))
            ->add('role', null, array('label' => 'Role'))
            ->add('password', null, array('label' => 'Password'))
            ->add('salt', null, array('label' => 'Salt'))
            ->add('name', null, array('label' => 'Name'))
            ->add('surname', null, array('label' => 'Surname'))
            ->add('subjects', null, array('label' => 'Subjects'))
            ->add('university', null, array('label' => 'University'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Employee::class
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_employee';
    }


}
