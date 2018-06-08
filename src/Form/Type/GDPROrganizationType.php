<?php
declare(strict_types=1);

namespace EHDev\GDPRManagementBundle\Form\Type;

use EHDev\GDPRManagementBundle\Entity\GDPROrganization;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GDPROrganizationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('label', TextType::class);
        $builder->add('foreignCountry', CheckboxType::class, [
            'required' => false,
        ]);
        $builder->add('foreignOrganization', CheckboxType::class, [
            'required' => false
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', GDPROrganization::class);
    }
}