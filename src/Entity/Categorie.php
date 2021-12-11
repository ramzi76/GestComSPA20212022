<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\CategorieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass=CategorieRepository::class)
 * @ApiResource()
 */
class Categorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_categorie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="design_categorie", type="string", length=50, nullable=false)
     */
    private $designCategorie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="desc_categorie", type="string", length=512, nullable=true, options={"default"="NULL"})
     */
    private $descCategorie = 'NULL';

    public function getIdCategorie(): ?int
    {
        return $this->idCategorie;
    }

    public function getDesignCategorie(): ?string
    {
        return $this->designCategorie;
    }

    public function setDesignCategorie(string $designCategorie): self
    {
        $this->designCategorie = $designCategorie;

        return $this;
    }

    public function getDescCategorie(): ?string
    {
        return $this->descCategorie;
    }

    public function setDescCategorie(?string $descCategorie): self
    {
        $this->descCategorie = $descCategorie;

        return $this;
    }


}
