<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\FournisseurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Fournisseur
 *
 * @ORM\Table(name="fournisseur", indexes={@ORM\Index(name="FK_FOURNISS_APP13_ADRESSE", columns={"adresse_id"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass=FournisseurRepository::class)
 * @ApiResource()
 */
class Fournisseur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_fournisseur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFournisseur;

    /**
     * @var string
     *
     * @ORM\Column(name="design_fournisseur", type="string", length=50, nullable=false)
     */
    private $designFournisseur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_tva", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $codeTva = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="pourcentage_remise_fournisseur", type="decimal", precision=6, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $pourcentageRemiseFournisseur = '0.00';

    /**
     * @var \Adresse
     *
     * @ORM\ManyToOne(targetEntity="Adresse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="adresse_id", referencedColumnName="id_adresse")
     * })
     */
    private $adresse;

    public function getIdFournisseur(): ?int
    {
        return $this->idFournisseur;
    }

    public function getDesignFournisseur(): ?string
    {
        return $this->designFournisseur;
    }

    public function setDesignFournisseur(string $designFournisseur): self
    {
        $this->designFournisseur = $designFournisseur;

        return $this;
    }

    public function getCodeTva(): ?string
    {
        return $this->codeTva;
    }

    public function setCodeTva(?string $codeTva): self
    {
        $this->codeTva = $codeTva;

        return $this;
    }

    public function getPourcentageRemiseFournisseur(): ?string
    {
        return $this->pourcentageRemiseFournisseur;
    }

    public function setPourcentageRemiseFournisseur(string $pourcentageRemiseFournisseur): self
    {
        $this->pourcentageRemiseFournisseur = $pourcentageRemiseFournisseur;

        return $this;
    }

    public function getAdresse(): ?Adresse
    {
        return $this->adresse;
    }

    public function setAdresse(?Adresse $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }


}
