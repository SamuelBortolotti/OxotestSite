<?php

namespace App\Form;

use Doctrine\DBAL\Exception\NotNullConstraintViolationException;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class Contact extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class, [
                'label' => 'First Name',
                'required' => true,


            ])
            ->add('lastName', TextType::class, [
                'label' => 'Last Name',
            ])
            ->add('phoneNumber', TextType::class, [
                'label' => 'Phone Number',
                'required' => false,
            ])
            ->add('email', TextType::class, [
                'label' => 'Email',
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Message',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        // Configure any additional options for the form type
    }
}