<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\LigneVenteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * LigneVente
 *
 * @ORM\Table(name="ligne_vente", indexes={@ORM\Index(name="FK_LIGNE_VE_APP03_ARTICLE", columns={"article_id"}), @ORM\Index(name="FK_LIGNE_VE_APP05_FACTURE_", columns={"facture_vente_id"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass=LigneVenteRepository::class)
 * @ApiResource()
 */
class LigneVente
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ligne_vente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLigneVente;

    /**
     * @var int
     *
     * @ORM\Column(name="numero_ligne", type="integer", nullable=false, options={"default"="1"})
     */
    private $numeroLigne = 1;

    /**
     * @var string
     *
     * @ORM\Column(name="design_article_abbr", type="string", length=30, nullable=false)
     */
    private $designArticleAbbr;

    /**
     * @var string
     *
     * @ORM\Column(name="puv", type="decimal", precision=10, scale=3, nullable=false, options={"default"="0.000"})
     */
    private $puv = '0.000';

    /**
     * @var int
     *
     * @ORM\Column(name="qte", type="integer", nullable=false, options={"default"="1"})
     */
    private $qte = 1;

    /**
     * @var string
     *
     * @ORM\Column(name="total_ht", type="decimal", precision=10, scale=3, nullable=false, options={"default"="0.000"})
     */
    private $totalHt = '0.000';

    /**
     * @var bool
     *
     * @ORM\Column(name="promotion", type="boolean", nullable=false)
     */
    private $promotion = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pourcentage_remise", type="decimal", precision=6, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $pourcentageRemise = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pourcentage_tva", type="decimal", precision=6, scale=2, nullable=false, options={"default"="18.00"})
     */
    private $pourcentageTva = '18.00';

    /**
     * @var \Article
     *
     * @ORM\ManyToOne(targetEntity="Article")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="article_id", referencedColumnName="id_article")
     * })
     */
    private $article;

    /**
     * @var \FactureVente
     *
     * @ORM\ManyToOne(targetEntity="FactureVente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="facture_vente_id", referencedColumnName="id_facture_vente")
     * })
     */
    private $factureVente;

    public function getIdLigneVente(): ?int
    {
        return $this->idLigneVente;
    }

    public function getNumeroLigne(): ?int
    {
        return $this->numeroLigne;
    }

    public function setNumeroLigne(int $numeroLigne): self
    {
        $this->numeroLigne = $numeroLigne;

        return $this;
    }

    public function getDesignArticleAbbr(): ?string
    {
        return $this->designArticleAbbr;
    }

    public function setDesignArticleAbbr(string $designArticleAbbr): self
    {
        $this->designArticleAbbr = $designArticleAbbr;

        return $this;
    }

    public function getPuv(): ?string
    {
        return $this->puv;
    }

    public function setPuv(string $puv): self
    {
        $this->puv = $puv;

        return $this;
    }

    public function getQte(): ?int
    {
        return $this->qte;
    }

    public function setQte(int $qte): self
    {
        $this->qte = $qte;

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

    public function getPromotion(): ?bool
    {
        return $this->promotion;
    }

    public function setPromotion(bool $promotion): self
    {
        $this->promotion = $promotion;

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

    public function getPourcentageTva(): ?string
    {
        return $this->pourcentageTva;
    }

    public function setPourcentageTva(string $pourcentageTva): self
    {
        $this->pourcentageTva = $pourcentageTva;

        return $this;
    }

    public function getArticle(): ?Article
    {
        return $this->article;
    }

    public function setArticle(?Article $article): self
    {
        $this->article = $article;

        return $this;
    }

    public function getFactureVente(): ?FactureVente
    {
        return $this->factureVente;
    }

    public function setFactureVente(?FactureVente $factureVente): self
    {
        $this->factureVente = $factureVente;

        return $this;
    }


}
