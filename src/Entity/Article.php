<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article", indexes={@ORM\Index(name="FK_ARTICLE_APP01_CATEGORI", columns={"categorie_id"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 * @ApiResource()
 */
class Article
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_article", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="design_article", type="string", length=100, nullable=false)
     */
    private $designArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="design_article_abbr", type="string", length=30, nullable=false)
     */
    private $designArticleAbbr;

    /**
     * @var string
     *
     * @ORM\Column(name="pua", type="decimal", precision=10, scale=3, nullable=false)
     */
    private $pua;

    /**
     * @var string
     *
     * @ORM\Column(name="puv", type="decimal", precision=10, scale=3, nullable=false)
     */
    private $puv;

    /**
     * @var string
     *
     * @ORM\Column(name="pourcentage_tva", type="decimal", precision=6, scale=2, nullable=false, options={"default"="18.00"})
     */
    private $pourcentageTva = '18.00';

    /**
     * @var int
     *
     * @ORM\Column(name="qte_stock", type="bigint", nullable=false)
     */
    private $qteStock;

    /**
     * @var int
     *
     * @ORM\Column(name="seuil_min", type="integer", nullable=false)
     */
    private $seuilMin = '0';

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categorie_id", referencedColumnName="id_categorie")
     * })
     */
    private $categorie;

    public function getIdArticle(): ?int
    {
        return $this->idArticle;
    }

    public function getDesignArticle(): ?string
    {
        return $this->designArticle;
    }

    public function setDesignArticle(string $designArticle): self
    {
        $this->designArticle = $designArticle;

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

    public function getPuv(): ?string
    {
        return $this->puv;
    }

    public function setPuv(string $puv): self
    {
        $this->puv = $puv;

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

    public function getQteStock(): ?string
    {
        return $this->qteStock;
    }

    public function setQteStock(string $qteStock): self
    {
        $this->qteStock = $qteStock;

        return $this;
    }

    public function getSeuilMin(): ?int
    {
        return $this->seuilMin;
    }

    public function setSeuilMin(int $seuilMin): self
    {
        $this->seuilMin = $seuilMin;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }


}
