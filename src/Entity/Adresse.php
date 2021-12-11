<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\AdresseRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Adresse
 *
 * @ORM\Table(name="adresse", indexes={@ORM\Index(name="FK_ADRESSE_APP09_REGION", columns={"region_id"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass=AdresseRepository::class)
 * @ApiResource()
 */
class Adresse
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_adresse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAdresse;

    /**
     * @var string
     * @Assert\NotBlank(message="L'adresse est obligatoire !")
     * @Assert\Length(min=5, minMessage="L'adresse doit avoir une longueur >= {minLength}", max=255, maxMessage="L'adresse doit avoir une longueur >= {maxLength}")
     * @ORM\Column(name="design_adresse", type="string", length=255, nullable=false)
     */
    private $designAdresse;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_rue", type="string", length=50, nullable=false)
     */
    private $numeroRue;

    /**
     * @var string
     *
     * @ORM\Column(name="design_rue", type="string", length=50, nullable=false)
     */
    private $designRue;

    /**
     * @var \Region
     *
     * @ORM\ManyToOne(targetEntity="Region")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="region_id", referencedColumnName="id_region")
     * })
     */
    private $region;

    public function getIdAdresse(): ?int
    {
        return $this->idAdresse;
    }

    public function getDesignAdresse(): ?string
    {
        return $this->designAdresse;
    }

    public function setDesignAdresse(string $designAdresse): self
    {
        $this->designAdresse = $designAdresse;

        return $this;
    }

    public function getNumeroRue(): ?string
    {
        return $this->numeroRue;
    }

    public function setNumeroRue(string $numeroRue): self
    {
        $this->numeroRue = $numeroRue;

        return $this;
    }

    public function getDesignRue(): ?string
    {
        return $this->designRue;
    }

    public function setDesignRue(string $designRue): self
    {
        $this->designRue = $designRue;

        return $this;
    }

    public function getRegion(): ?Region
    {
        return $this->region;
    }

    public function setRegion(?Region $region): self
    {
        $this->region = $region;

        return $this;
    }


}
