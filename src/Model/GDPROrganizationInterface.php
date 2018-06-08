<?php
declare(strict_types=1);

namespace EHDev\GDPRManagementBundle\Model;

interface GDPROrganizationInterface
{
    public function isForeignOrganization(): bool;

    public function isForeignCountry(): bool;
}