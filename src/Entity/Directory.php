<?php
declare(strict_types=1);

namespace EHDev\GDPRManagementBundle\Entity;

use Doctrine\Common\Collections\Collection;
use EHDev\GDPRManagementBundle\Model\DirectoryInterface;
use Doctrine\ORM\Mapping as ORM;
use EHDev\GDPRManagementBundle\Model\ProcessActivityInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="ehdev_gdpr_directory")
 */
class Directory implements DirectoryInterface
{
    /**
     * @var integer
     *
     * @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue()
     */
    private $id;

    /**
     * @var Collection $contacts
     *
     * @ORM\ManyToMany(targetEntity="Contact")
     */
    protected $contacts;

    /**
     * @var ProcessActivityInterface
     *
     * @ORM\ManyToOne(targetEntity="ProcessActivity")
     */
    protected $activity;

    /**
     * Returns the id of the directory.
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContacts(): Collection
    {
        return $this->contacts;
    }

    public function getProcessActivity(): ProcessActivityInterface
    {
        return $this->activity;
    }
}
