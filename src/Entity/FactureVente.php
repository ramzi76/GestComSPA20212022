<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\FactureVenteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * FactureVente
 *
 * @ORM\Table(name="facture_vente", indexes={@ORM\Index(name="FK_FACTURE__APP06_CLIENT", columns={"client_id"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass=FactureVenteRepository::class)
 * @ApiResource()
 */
class FactureVente
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_facture_vente", type="integer", nullable=false, options={"comment"="2021-1
             2021-2"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFactureVente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_facture_vente", type="date", nullable=false)
     */
    private $dateFactureVente;

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
     * @ORM\Column(name="facture_vente_payee", type="boolean", nullable=false)
     */
    private $factureVentePayee = '0';

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_id", referencedColumnName="id_client")
     * })
     */
    private $client;

    public function getIdFactureVente(): ?int
    {
        return $this->idFactureVente;
    }

    public function getDateFactureVente(): ?\DateTimeInterface
    {
        return $this->dateFactureVente;
    }

    public function setDateFactureVente(\DateTimeInterface $dateFactureVente): self
    {
        $this->dateFactureVente = $dateFactureVente;

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

    public function getFactureVentePayee(): ?bool
    {
        return $this->factureVentePayee;
    }

    public function setFactureVentePayee(bool $factureVentePayee): self
    {
        $this->factureVentePayee = $factureVentePayee;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }


}
