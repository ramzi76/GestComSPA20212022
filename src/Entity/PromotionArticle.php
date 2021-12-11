<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\PromotionArticleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * PromotionArticle
 *
 * @ORM\Table(name="promotion_article", indexes={@ORM\Index(name="FK_PROMOTIO_APP14_ARTICLE", columns={"article_id"}), @ORM\Index(name="FK_PROMOTIO_APP15_PROMOTIO", columns={"promotion_id"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass=PromotionArticleRepository::class)
 * @ApiResource()
 */
class PromotionArticle
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_promotion_article", type="string", length=31, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPromotionArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="pourcentage_remise", type="decimal", precision=6, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $pourcentageRemise = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="puv", type="decimal", precision=10, scale=3, nullable=false, options={"default"="0.000"})
     */
    private $puv = '0.000';

    /**
     * @var string
     *
     * @ORM\Column(name="puv_promotion", type="decimal", precision=10, scale=3, nullable=false, options={"default"="0.000"})
     */
    private $puvPromotion = '0.000';

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
     * @var \Promotion
     *
     * @ORM\ManyToOne(targetEntity="Promotion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="promotion_id", referencedColumnName="id_promotion")
     * })
     */
    private $promotion;

    public function getIdPromotionArticle(): ?string
    {
        return $this->idPromotionArticle;
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

    public function getPuv(): ?string
    {
        return $this->puv;
    }

    public function setPuv(string $puv): self
    {
        $this->puv = $puv;

        return $this;
    }

    public function getPuvPromotion(): ?string
    {
        return $this->puvPromotion;
    }

    public function setPuvPromotion(string $puvPromotion): self
    {
        $this->puvPromotion = $puvPromotion;

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

    public function getPromotion(): ?Promotion
    {
        return $this->promotion;
    }

    public function setPromotion(?Promotion $promotion): self
    {
        $this->promotion = $promotion;

        return $this;
    }


}
