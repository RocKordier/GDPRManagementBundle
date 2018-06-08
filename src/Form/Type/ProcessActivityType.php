<?php
declare(strict_types=1);

namespace EHDev\GDPRManagementBundle\Form\Type;

use EHDev\GDPRManagementBundle\Entity\AffectedPersonType;
use EHDev\GDPRManagementBundle\Entity\Contact;
use EHDev\GDPRManagementBundle\Entity\DataType;
use EHDev\GDPRManagementBundle\Entity\GDPROrganization;
use EHDev\GDPRManagementBundle\Entity\ProcessActivity;
use EHDev\GDPRManagementBundle\Model\ProcessActivityInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProcessActivityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('source', TextType::class);
        $builder->add('objective', TextType::class);
        $builder->add('contacts', EntityType::class, [
            'multiple' => true,
            'class'    => Contact::class,
        ]);

        $builder->add('deletionType', ChoiceType::class, [
            'choices' => [
                ProcessActivityInterface::DELETION_TYPE_INTERVAL => 'Interval',
                ProcessActivityInterface::DELETION_TYPE_OPT_OUT  => 'Opt Out',
            ]
        ]);
        $builder->add('deletionTerm', TextType::class);
        $builder->add('affectedPersonTypes', EntityType::class, [
            'mutliple' => true,
            'class'    => AffectedPersonType::class
        ]);
        $builder->add('dataTypes', EntityType::class, [
            'mutliple' => true,
            'class'    => DataType::class
        ]);
        $builder->add('legalBasis', TextType::class);
        $builder->add('gdprOrganizations', EntityType::class, [
            'multiple' => true,
            'class'    => GDPROrganization::class
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', ProcessActivity::class);
    }
}