<?php
declare(strict_types=1);

namespace EHDev\GDPRManagementBundle\Form\Type;

use EHDev\GDPRManagementBundle\Entity\Contact;
use Oro\Bundle\AddressBundle\Form\Type\PhoneType;
use Oro\Bundle\EntityConfigBundle\Form\Type\TextareaType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class);
        $builder->add('company', TextType::class);
        $builder->add('position', TextType::class);
        $builder->add('email', EmailType::class);
        $builder->add('phone', PhoneType::class);
        $builder->add('address', TextareaType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class
        ]);
    }

    public function getBlockPrefix()
    {
        return 'ehedev_gdpr_contact';
    }
}