<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\PromotionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Promotion
 *
 * @ORM\Table(name="promotion")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass=PromotionRepository::class)
 * @ApiResource()
 */
class Promotion
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_promotion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPromotion;

    /**
     * @var string
     *
     * @ORM\Column(name="design_promotion", type="string", length=30, nullable=false)
     */
    private $designPromotion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="desc_promotion", type="string", length=1024, nullable=true, options={"default"="NULL"})
     */
    private $descPromotion = 'NULL';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="pourcentage_remise", type="decimal", precision=6, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $pourcentageRemise = '0.00';

    public function getIdPromotion(): ?int
    {
        return $this->idPromotion;
    }

    public function getDesignPromotion(): ?string
    {
        return $this->designPromotion;
    }

    public function setDesignPromotion(string $designPromotion): self
    {
        $this->designPromotion = $designPromotion;

        return $this;
    }

    public function getDescPromotion(): ?string
    {
        return $this->descPromotion;
    }

    public function setDescPromotion(?string $descPromotion): self
    {
        $this->descPromotion = $descPromotion;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

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


}
