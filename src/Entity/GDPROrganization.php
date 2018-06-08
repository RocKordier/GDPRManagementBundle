<?php
declare(strict_types=1);

namespace EHDev\GDPRManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use EHDev\GDPRManagementBundle\Model\GDPROrganizationInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="ehedev_gdpr_organization")
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
     * @var bool
     *
     * @ORM\Column(type="boolean")
     */
    private $foreignCountry;

    /**
     * @var bool
     *
     * @ORM\Column(type="boolean")
     */
    private $foreignOrganization;

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
}