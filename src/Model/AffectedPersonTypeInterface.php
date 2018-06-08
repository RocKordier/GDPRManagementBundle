<?php
declare(strict_types=1);

namespace EHDev\GDPRManagementBundle\Model;


interface AffectedPersonTypeInterface
{
    public function getLabel(): string;
}