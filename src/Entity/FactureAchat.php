<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\FactureAchatRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * FactureAchat
 *
 * @ORM\Table(name="facture_achat", indexes={@ORM\Index(name="FK_FACTURE__APP11_FOURNISS", columns={"fournisseur_id"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass=FactureAchatRepository::class)
 * @ApiResource()
 */
class FactureAchat
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_facture_achat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFactureAchat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_facture_achat", type="date", nullable=false)
     */
    private $dateFactureAchat;

    /**
     * @var string
     *
     * @ORM\Column(name="total_ht", type="decimal", precision=12, scale=3, nullable=false, options={"default"="0.000"})
     */
    private $totalHt = '0.000';

    /**
     * @var string
     *
     * @ORM\Column(name="pourcentage_remise", type="decimal", precision=6, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $pourcentageRemise = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="total_remise", type="decimal", precision=12, scale=3, nullable=false, options={"default"="0.000"})
     */
    private $totalRemise = '0.000';

    /**
     * @var string
     *
     * @ORM\Column(name="total_tva", type="decimal", precision=12, scale=3, nullable=false, options={"default"="0.000"})
     */
    private $totalTva = '0.000';

    /**
     * @var string
     *
     * @ORM\Column(name="timbre", type="decimal", precision=6, scale=3, nullable=false, options={"default"="0.600"})
     */
    private $timbre = '0.600';

    /**
     * @var string
     *
     * @ORM\Column(name="total_ttc", type="decimal", precision=12, scale=3, nullable=false, options={"default"="0.000"})
     */
    private $totalTtc = '0.000';

    /**
     * @var string
     *
     * @ORM\Column(name="total_ttc_texte", type="string", length=512, nullable=false)
     */
    private $totalTtcTexte;

    /**
     * @var bool
     *
     * @ORM\Column(name="facture_achat_payee", type="boolean", nullable=false)
     */
    private $factureAchatPayee = '0';

    /**
     * @var \Fournisseur
     *
     * @ORM\ManyToOne(targetEntity="Fournisseur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fournisseur_id", referencedColumnName="id_fournisseur")
     * })
     */
    private $fournisseur;

    public function getIdFactureAchat(): ?int
    {
        return $this->idFactureAchat;
    }

    public function getDateFactureAchat(): ?\DateTimeInterface
    {
        return $this->dateFactureAchat;
    }

    public function setDateFactureAchat(\DateTimeInterface $dateFactureAchat): self
    {
        $this->dateFactureAchat = $dateFactureAchat;

        return $this;
    }

    public function getTotalHt(): ?string
    {
        return $this->totalHt;
    }

    public function setTotalHt(string $totalHt): self
    {
        $this->totalHt = $totalHt;

        return $this;
    }

    public function getPourcentageRemise(): ?string
    {
        return $this->pourcentageRemise;
    }

    public function setPourcentageRemise(string $pourcentageRemise): self
    {
        $this->pourcentageRemise = $pourcentageRemise;

        return $this;
    }

    public function getTotalRemise(): ?string
    {
        return $this->totalRemise;
    }

    public function setTotalRemise(string $totalRemise): self
    {
        $this->totalRemise = $totalRemise;

        return $this;
    }

    public function getTotalTva(): ?string
    {
        return $this->totalTva;
    }

    public function setTotalTva(string $totalTva): self
    {
        $this->totalTva = $totalTva;

        return $this;
    }

    public function getTimbre(): ?string
    {
        return $this->timbre;
    }

    public function setTimbre(string $timbre): self
    {
        $this->timbre = $timbre;

        return $this;
    }

    public function getTotalTtc(): ?string
    {
        return $this->totalTtc;
    }

    public function setTotalTtc(string $totalTtc): self
    {
        $this->totalTtc = $totalTtc;

        return $this;
    }

    public function getTotalTtcTexte(): ?string
    {
        return $this->totalTtcTexte;
    }

    public function setTotalTtcTexte(string $totalTtcTexte): self
    {
        $this->totalTtcTexte = $totalTtcTexte;

        return $this;
    }

    public function getFactureAchatPayee(): ?bool
    {
        return $this->factureAchatPayee;
    }

    public function setFactureAchatPayee(bool $factureAchatPayee): self
    {
        $this->factureAchatPayee = $factureAchatPayee;

        return $this;
    }

    public function getFournisseur(): ?Fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?Fournisseur $fournisseur): self
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }


}
