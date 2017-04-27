<?php

namespace AppBundle\Form;

use AppBundle\Entity\Task;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('question');

        $builder->add('tags', CollectionType::class, array(
            'entry_type' => TagType::class,
            'allow_add'    => true,
            'allow_delete' => true,
            'by_reference' => false,
        ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Task::class,
        ));
    }

    public function getBlockPrefix()
    {
        return 'app_bundle_task_type';
    }
}
