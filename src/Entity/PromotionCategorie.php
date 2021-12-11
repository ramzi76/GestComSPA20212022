<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\PromotionCategorieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * PromotionCategorie
 *
 * @ORM\Table(name="promotion_categorie", indexes={@ORM\Index(name="FK_PROMOTIO_APP16_CATEGORI", columns={"categorie_id"}), @ORM\Index(name="FK_PROMOTIO_APP17_PROMOTIO", columns={"promotion_id"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass=PromotionCategorieRepository::class)
 * @ApiResource()
 */
class PromotionCategorie
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_promotion_categorie", type="string", length=31, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPromotionCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="pourcentage_remise", type="decimal", precision=6, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $pourcentageRemise = '0.00';

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categorie_id", referencedColumnName="id_categorie")
     * })
     */
    private $categorie;

    /**
     * @var \Promotion
     *
     * @ORM\ManyToOne(targetEntity="Promotion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="promotion_id", referencedColumnName="id_promotion")
     * })
     */
    private $promotion;

    public function getIdPromotionCategorie(): ?string
    {
        return $this->idPromotionCategorie;
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

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

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
