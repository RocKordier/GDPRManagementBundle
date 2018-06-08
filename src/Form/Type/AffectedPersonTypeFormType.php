<?php
declare(strict_types=1);

namespace EHDev\GDPRManagementBundle\Form\Type;

use EHDev\GDPRManagementBundle\Entity\AffectedPersonType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AffectedPersonTypeFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('label', TextType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', AffectedPersonType::class);
    }
}