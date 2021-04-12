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

class ChangePasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, [
                'disabled' => true,
            ])
            ->add('lastname', TextType::class, [
                'disabled' => true,
            ])
            ->add('email', EmailType::class, [
                'disabled' => true,
            ])
            ->add('password_old', PasswordType::class, [
                'mapped' => false,
                'label' => 'Current Password',
                'required' => true,
                'attr' => [
                    'placeholder' => 'current password'
                ]
            ])
            ->add('password_new', RepeatedType::class, [
                'type' => PasswordType::class,
                'mapped' => false,
                'constraints' => new Length([
                    'min' => 8,
                    'max' => 128
                ]),
                'invalid_message' => 'The password fields must match.',
                'label' => 'New Password',
                'required' => true,
                'first_options' => [ 'label' => 'New Password', 'attr' => array('placeholder' => 'Enter new password')],
                'second_options' => [ 'label' => 'Confirm New password', 'attr' => array('placeholder' => 'Retype new password')]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Update'
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
