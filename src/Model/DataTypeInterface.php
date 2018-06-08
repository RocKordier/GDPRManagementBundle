<?php
declare(strict_types=1);

namespace EHDev\GDPRManagementBundle\Model;


interface DataTypeInterface
{
    public function getLabel(): string;

    public function isSensitive(): bool;
}