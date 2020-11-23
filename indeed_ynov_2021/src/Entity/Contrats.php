<?php

namespace App\Entity;

use App\Repository\ContratsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContratsRepository::class)
 */
class Contrats
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Contrats;

    public function __toString(): string
    {
        return $this->getContrats();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContrats(): ?string
    {
        return $this->Contrats;
    }

    public function setContrats(string $Contrats): self
    {
        $this->Contrats = $Contrats;

        return $this;
    }
}
