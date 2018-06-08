<?php
declare(strict_types=1);

namespace EHDev\GDPRManagementBundle\Form\Type;

use EHDev\GDPRManagementBundle\Entity\DataType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DataTypeFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('label', TextType::class);
        $builder->add('sensitive', CheckboxType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', DataType::class);
        $resolver->setDefault('empty_data', function(FormInterface $form) {
            return new DataType(
                $form->get('label')->getData(),
                $form->get('sensitive')->getData()
            );
        });
    }

    public function getBlockPrefix()
    {
        return 'ehedev_gdpr_data_type';
    }
}