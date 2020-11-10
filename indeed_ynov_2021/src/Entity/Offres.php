<?php

namespace App\Entity;

use App\Repository\OffresRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OffresRepository::class)
 */
class Offres
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
    private $Title;

    /**
     * @ORM\Column(type="text")
     */
    private $Description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $CodePostal;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $Ville;

    /**
     * @ORM\Column(type="datetime")
     */
    private $CreatedAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $UpdatedAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $MissionEnd;

    /**
     * @ORM\ManyToOne(targetEntity=Contrats::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Contrat;

    /**
     * @ORM\ManyToOne(targetEntity=TypeContrats::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $TypeContrat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(string $Title): self
    {
        $this->Title = $Title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->Adresse;
    }

    public function setAdresse(string $Adresse): self
    {
        $this->Adresse = $Adresse;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->CodePostal;
    }

    public function setCodePostal(string $CodePostal): self
    {
        $this->CodePostal = $CodePostal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->Ville;
    }

    public function setVille(string $Ville): self
    {
        $this->Ville = $Ville;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->CreatedAt;
    }

    public function setCreatedAt(\DateTimeInterface $CreatedAt): self
    {
        $this->CreatedAt = $CreatedAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->UpdatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $UpdatedAt): self
    {
        $this->UpdatedAt = $UpdatedAt;

        return $this;
    }

    public function getMissionEnd(): ?\DateTimeInterface
    {
        return $this->MissionEnd;
    }

    public function setMissionEnd(?\DateTimeInterface $MissionEnd): self
    {
        $this->MissionEnd = $MissionEnd;

        return $this;
    }

    public function getContrat(): ?Contrats
    {
        return $this->Contrat;
    }

    public function setContrat(?Contrats $Contrat): self
    {
        $this->Contrat = $Contrat;

        return $this;
    }

    public function getTypeContrat(): ?TypeContrats
    {
        return $this->TypeContrat;
    }

    public function setTypeContrat(?TypeContrats $TypeContrat): self
    {
        $this->TypeContrat = $TypeContrat;

        return $this;
    }
}
