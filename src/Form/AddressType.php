<?php

namespace App\Form;

use App\Entity\Address;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Address Name ?',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Give a name to the address'
                    ]
                ])
            ->add('firstname', TextType::class, [
                'label' => 'Firstname',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Firstname'
                ]
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Lastname',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Lastname'
                ]
            ])
            ->add('company', TextType::class, [
                'label' => 'Company (optional)',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Company (optional)'
                ]
            ])
            ->add('address', TextType::class, [
                'label' => 'Street and Number',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Street and Number'
                ]
            ])
            ->add('postal', TextType::class, [
                'label' => 'Zip Code',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Give a name to the address'
                ]
            ])
            ->add('city', TextType::class, [
                'label' => 'City',
                'required' => true,
                'attr' => [
                    'placeholder' => 'City and State'
                ]
            ])
            ->add('country', CountryType::class, [
                'label' => 'Country',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Country'
                ]
            ])
            ->add('phone', TelType::class, [
                'label' => 'Phone',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Phone'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Save address',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Address::class,
        ]);
    }
}
