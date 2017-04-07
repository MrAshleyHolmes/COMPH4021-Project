<?php

namespace AppBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('username', TextType::class, array(
            'label' => "Username",
            'required' => true,
            'attr' => array(
                'placeholder' => "Username",
                'class' => "form-control"
            )
        ))
            ->add('firstname', TextType::class, array(
                'label' => "First Name",
                'required' => true,
                'attr' => array(
                    'placeholder' => "Firstname",
                    'class' => "form-control"
                )
            ))
            ->add('lastname', TextType::class, array(
                'label' => "Last Name",
                'required' => true,
                'attr' => array(
                    'placeholder' => "Last Name",
                    'class' => "form-control"
                )
            ))
            ->add('email', EmailType::class, array(
                'label' => "Email",
                'required' => true,
                'attr' => array(
                    'placeholder' => "Email",
                    'class' => "form-control"
                )
            ))
            ->add('password', PasswordType::class, array(
                'label' => "Password",
                'required' => true,
                'attr' => array(
                    'placeholder' => "Password",
                    'class' => "form-control"
                )
            ))
            ->add('isAdmin', CheckboxType::class, array(
                'label' => "Make Admin",
                'required' => false,
            ));
        /*$builder->add('username')->add('firstname')->add('lastname')->add('email')->add('password');*/
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_user';
    }


}
