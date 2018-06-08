<?php
declare(strict_types=1);

namespace EHDev\GDPRManagementBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use EHDev\GDPRManagementBundle\Model\DataTypeInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="ehedev_gdpr_data_type")
 */
class DataType implements DataTypeInterface
{
    /**
     * @var integer
     *
     * @ORM\Column(type="integer") @ORM\Id
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    protected $label;

    /**
     * @var string
     *
     * @ORM\Column(type="boolean")
     * @Assert\NotBlank()
     */
    protected $sensitive = false;

    public function __construct(string $label, bool $sensitive = false)
    {
        $this->label = $label;
        $this->sensitive = $sensitive;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function isSensitive(): bool
    {
        return $this->sensitive;
    }
}