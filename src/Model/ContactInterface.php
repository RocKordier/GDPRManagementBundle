<?php
declare(strict_types=1);

namespace EHDev\GDPRManagementBundle\Model;


interface ContactInterface
{
    public function getName(): ?string;

    public function setName(string $name): void;

    public function getCompany(): string;

    public function setCompany(string $name): void;

    public function getPosition(): ?string;

    public function setPosition(string $position): void;

    public function getEmail(): ?string;

    public function setEmail(string $email): void;

    public function getPhone(): ?string;

    public function setPhone(string $phone): void;

    public function getAddress(): ?string;

    public function setAddress(string $address): void;
}