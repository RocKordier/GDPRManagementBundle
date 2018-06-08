<?php
declare(strict_types=1);

namespace EHDev\GDPRManagementBundle\Entity;

use EHDev\GDPRManagementBundle\Model\ContactInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="ehdev_gdpr_contact")
 */
class Contact implements ContactInterface
{
    /**
     * @var string
     *
     * @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue
     */
    protected $id;
    /**
     * @var string
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    protected $company;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    protected $position;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $phone;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     * @Assert\Email()
     */
    protected $email;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    protected $address;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getCompany(): string
    {
        return $this->company;
    }

    public function setCompany(string $name): void
    {
        $this->company = $name;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(string $position): void
    {
        $this->position = $position;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }
}
