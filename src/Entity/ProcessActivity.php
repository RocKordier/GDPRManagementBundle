<?php
declare(strict_types=1);

namespace EHDev\GDPRManagementBundle\Entity;

use Doctrine\Common\Collections\Collection;
use EHDev\GDPRManagementBundle\Model\ExtendProcessActivity;
use EHDev\GDPRManagementBundle\Model\ProcessActivityInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use EHDev\BasicsBundle\Entity\Traits\OrganizationOwnerTrait;
use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;
use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\ConfigField;


/**
 * @ORM\Entity
 * @ORM\Table(name="ehedev_gdpr_process_activity")
 * @Config(
 *     defaultValues={
 *         "comment"={
 *             "enabled" = true
 *         },
 *         "tag"={
 *             "enabled" = true
 *         }
 *     }
 * )
 */
class ProcessActivity extends ExtendProcessActivity
    implements ProcessActivityInterface
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
     * @var Collection
     *
     * @ORM\ManyToMany(targetEntity="DataType")
     */
    protected $dataTypes;

    /**
     * @var Collection
     *
     * @ORM\ManyToMany(targetEntity="GDPROrganization")
     */
    protected $gdprOrganizations;

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

    public function setDeletionType(string $type): void
    {
        $this->deletionType = $type;
    }

    public function getAffectedPersonTypes(): Collection
    {
        return $this->affectedPersonTypes;
    }

    public function setAffectedPersonTypes(Collection $types): void
    {
        $this->affectedPersonTypes = $types;
    }

    public function getDataTypes(): Collection
    {
        return $this->dataTypes;
    }

    public function getContacts(): Collection
    {
        return $this->contacts;
    }

    public function setContacts(Collection $collection): void
    {
        $this->contacts = $collection;
    }

    public function setDataTypes(Collection $type): void
    {
        $this->dataTypes = $type;
    }

    public function getLegalBasis(): string
    {
        return $this->legalBasis;
    }

    public function setLegalBasis(string $legal): void
    {
        $this->legalBasis = $legal;
    }

    public function getGDPROrganizations(): Collection
    {
        return $this->gdprOrganizations;
    }

    public function setGDPROrganizations(Collection $organizations): void
    {
        $this->gdprOrganizations = $organizations;
    }
}
