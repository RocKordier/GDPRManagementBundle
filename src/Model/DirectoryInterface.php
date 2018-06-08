<?php
declare(strict_types=1);

namespace EHDev\GDPRManagementBundle\Model;


use Doctrine\Common\Collections\Collection;

interface DirectoryInterface
{
    public function getContacts(): Collection;

    public function getProcessActivity(): ProcessActivityInterface;
}