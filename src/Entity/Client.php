<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client", indexes={@ORM\Index(name="FK_CLIENT_APP08_ADRESSE", columns={"adresse_id"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 * @ApiResource()
 */
class Client
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_client", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClient;

    /**
     * @var string
     *
     * @ORM\Column(name="design_client", type="string", length=50, nullable=false)
     */
    private $designClient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_tva", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $codeTva = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="poucentage_remise_client", type="decimal", precision=6, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $poucentageRemiseClient = '0.00';

    /**
     * @var \Adresse
     *
     * @ORM\ManyToOne(targetEntity="Adresse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="adresse_id", referencedColumnName="id_adresse")
     * })
     */
    private $adresse;

    public function getIdClient(): ?int
    {
        return $this->idClient;
    }

    public function getDesignClient(): ?string
    {
        return $this->designClient;
    }

    public function setDesignClient(string $designClient): self
    {
        $this->designClient = $designClient;

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

    public function getPoucentageRemiseClient(): ?string
    {
        return $this->poucentageRemiseClient;
    }

    public function setPoucentageRemiseClient(string $poucentageRemiseClient): self
    {
        $this->poucentageRemiseClient = $poucentageRemiseClient;

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
