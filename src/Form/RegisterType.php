<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, [
                'label' => 'Firstname',
                'required' => true,
                'constraints' => new Length([
                    'min' => 3,
                    'max' => 32
                ]),
                'attr' => [
                    'placeholder' => 'Your Firstname'
                ]
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Lastname',
                'required' => true,
                'constraints' => new Length([
                    'min' => 3,
                    'max' => 32
                ]),
                'attr' => [
                    'placeholder' => 'Your lastname'
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'required' => true,
                'constraints' => new Length([
                    'min' => 8,
                    'max' => 128
                ]),
                'attr' => [
                    'placeholder' => 'your@email.com'
                ]
            ])
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'constraints' => new Length([
                    'min' => 8,
                    'max' => 128
                ]),
                'invalid_message' => 'The password fields must match.',
                'label' => 'Password',
                'required' => true,
                'first_options' => [ 'label' => 'Password', 'attr' => array('placeholder' => 'Enter password')],
                'second_options' => [ 'label' => 'Confirm password', 'attr' => array('placeholder' => 'Retype password')]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Register',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
