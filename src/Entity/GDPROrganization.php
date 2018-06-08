<?php
declare(strict_types=1);

namespace EHDev\GDPRManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use EHDev\GDPRManagementBundle\Model\GDPROrganizationInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="ehedev_gdpr_organization")
 * @UniqueEntity(fields={"label"})
 */
class GDPROrganization implements GDPROrganizationInterface
{
    /**
     * @var integer
     *
     * @ORM\Id @ORM\GeneratedValue @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $label;

    /**
     * @var bool
     *
     * @ORM\Column(type="boolean")
     * @Assert\NotBlank()
     */
    private $foreignCountry = false;

    /**
     * @var bool
     *
     * @ORM\Column(type="boolean")
     * @Assert\NotBlank()
     */
    private $foreignOrganization = false;

    public function getId(): int
    {
        return $this->id;
    }

    public function isForeignOrganization(): bool
    {
        return $this->foreignCountry;
    }

    public function setForeignOrganization(bool $value)
    {
        $this->foreignOrganization = $value;
    }

    public function isForeignCountry(): bool
    {
        return $this->foreignCountry;
    }

    public function setForeignCountry(bool $value)
    {
        $this->foreignCountry = $value;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }
}