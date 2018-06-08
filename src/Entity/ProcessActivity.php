<?php
declare(strict_types=1);

namespace EHDev\GDPRManagementBundle\Entity;

use Doctrine\Common\Collections\Collection
use EHDev\GDPRManagementBundle\Model\ProcessActivityInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use EHDev\BasicsBundle\Entity\Traits\OrganizationOwnerTrait;

/**
 * @ORM\Entity
 * @ORM\Table(name="ehedev_gdpr_process_activity)
 */
class ProcessActivity implements ProcessActivityInterface
{
    use OrganizationOwnerTrait;

    /**
     * @var integer
     *
     * @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @var Collection
     *
     * @ORM\ManyToMany(targetEntity="Contact")
     */
    protected $contacts;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    protected $objective;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    protected $source;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    protected $deletionTerm;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    protected $deletionType;

    /**
     * @var Collection
     *
     * @ORM\ManyToMany(targetEntity="AffectedPersonType")
     */
    protected $affectedPersonTypes;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $legalBasis;

    /**
     * @var string
     *
     * @ORM\ManyToMany(targetEntity="DataType")
     */
    protected $dataTypes;

    public function getObjective(): ?string
    {
        return $this->objective;
    }

    public function setObjective(string $objective): void
    {
        $this->objective = $objective;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(string $source): void
    {
        $this->source = $source;
    }

    public function getDeletionTerm(): ?string
    {
        return $this->deletionTerm;
    }

    public function setDeletionTerm(string $term): void
    {
        $this->deletionTerm = $term;
    }

    public function getDeletionType(): ?string
    {
        return $this->deletionType;
    }

    public function setDeletionType(string $type)
    {
        $this->deletionType = $type;
    }

    public function getAffectedPersonTypes(): Collection
    {
        return $this->affectedPersonTypes;
    }

    public function setAffectedPersonTypes(Collection $types)
    {
        $this->affectedPersonTypes = $types;
    }

    public function getDataTypes(): Collection
    {
        return $this->dataTypes;
    }

    public function setDataTypes(Collection $type)
    {
        $this->dataTypes = $type;
    }

    public function getLegalBasis(): string
    {
        return $this->legalBasis;
    }

    public function setLegalBasis(string $legal)
    {
        $this->legalBasis = $legal;
    }
}