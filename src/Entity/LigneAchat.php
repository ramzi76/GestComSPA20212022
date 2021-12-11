<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\LigneAchatRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * LigneAchat
 *
 * @ORM\Table(name="ligne_achat", indexes={@ORM\Index(name="FK_LIGNE_AC_APP04_ARTICLE", columns={"article_id"}), @ORM\Index(name="FK_LIGNE_AC_APP10_FACTURE_", columns={"facture_achat_id"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass=LigneAchatRepository::class)
 * @ApiResource()
 */
class LigneAchat
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ligne_achat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLigneAchat;

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
     * @ORM\Column(name="pua", type="decimal", precision=10, scale=3, nullable=false, options={"default"="0.000"})
     */
    private $pua = '0.000';

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
     * @var \FactureAchat
     *
     * @ORM\ManyToOne(targetEntity="FactureAchat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="facture_achat_id", referencedColumnName="id_facture_achat")
     * })
     */
    private $factureAchat;

    public function getIdLigneAchat(): ?int
    {
        return $this->idLigneAchat;
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

    public function getPua(): ?string
    {
        return $this->pua;
    }

    public function setPua(string $pua): self
    {
        $this->pua = $pua;

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

    public function getFactureAchat(): ?FactureAchat
    {
        return $this->factureAchat;
    }

    public function setFactureAchat(?FactureAchat $factureAchat): self
    {
        $this->factureAchat = $factureAchat;

        return $this;
    }


}
