<?php
declare(strict_types=1);

namespace EHDev\GDPRManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use EHDev\GDPRManagementBundle\Model\AffectedPersonTypeInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="ehedev_gdpr_affected_person_type")
 * @UniqueEntity(fields={"label"})
 */
class AffectedPersonType implements AffectedPersonTypeInterface
{
    /**
     * @var integer
     *
     * @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $label;

    public function __construct(string $label)
    {
        $this->label = $label;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

}