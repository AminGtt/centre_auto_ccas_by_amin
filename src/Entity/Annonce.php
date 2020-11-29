<?php

namespace App\Entity;

use App\Repository\AnnonceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AnnonceRepository::class)
 */
class Annonce
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
    private $titre;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix;

    /**
     * @ORM\Column(type="date")
     */
    private $anneeMiseEnCirculation;

    /**
     * @ORM\Column(type="integer")
     */
    private $kilometrage;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateDepotAnnonce;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descriptionGenerale;

    /**
     * @ORM\Column(type="text")
     */
    private $descriptionEquipement;

    /**
     * @ORM\Column(type="text")
     */
    private $descriptionTechnique;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getAnneeMiseEnCirculation(): ?\DateTimeInterface
    {
        return $this->anneeMiseEnCirculation;
    }

    public function setAnneeMiseEnCirculation(\DateTimeInterface $anneeMiseEnCirculation): self
    {
        $this->anneeMiseEnCirculation = $anneeMiseEnCirculation;

        return $this;
    }

    public function getKilometrage(): ?int
    {
        return $this->kilometrage;
    }

    public function setKilometrage(int $kilometrage): self
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    public function getDateDepotAnnonce(): ?\DateTimeInterface
    {
        return $this->dateDepotAnnonce;
    }

    public function setDateDepotAnnonce(\DateTimeInterface $dateDepotAnnonce): self
    {
        $this->dateDepotAnnonce = $dateDepotAnnonce;

        return $this;
    }

    public function getDescriptionGenerale(): ?string
    {
        return $this->descriptionGenerale;
    }

    public function setDescriptionGenerale(string $descriptionGenerale): self
    {
        $this->descriptionGenerale = $descriptionGenerale;

        return $this;
    }

    public function getDescriptionEquipement(): ?string
    {
        return $this->descriptionEquipement;
    }

    public function setDescriptionEquipement(string $descriptionEquipement): self
    {
        $this->descriptionEquipement = $descriptionEquipement;

        return $this;
    }

    public function getDescriptionTechnique(): ?string
    {
        return $this->descriptionTechnique;
    }

    public function setDescriptionTechnique(string $descriptionTechnique): self
    {
        $this->descriptionTechnique = $descriptionTechnique;

        return $this;
    }
}
