<?php
declare(strict_types=1);

namespace EHDev\GDPRManagementBundle\Model;

use Doctrine\Common\Collections\Collection;
use Oro\Bundle\OrganizationBundle\Entity\OrganizationInterface;

interface ProcessActivityInterface
    extends OrganizationInterface
{
    const DELETION_TYPE_OPT_OUT   = 'opt_out';
    const DELETION_TYPE_INTERVAL  = 'interval';

    public function getObjective(): ?string;

    public function setObjective(string $objective): void;

    public function getSource(): ?string;

    public function setSource(string $source): void;

    public function getDeletionTerm(): ?string;

    public function setDeletionTerm(string $term): void;

    public function getDeletionType(): ?string;

    public function setDeletionType(string $type);

    public function getAffectedPersonTypes(): Collection;

    public function setAffectedPersonTypes(Collection $types);

    public function getContact(): ?ContactInterface;

    public function setContact(ContactInterface $contact);

    public function getDataTypes(): Collection;

    public function setDataTypes(Collection $type);

    public function getLegalBasis(): string;

    public function setLegalBasis(string $legal);
}