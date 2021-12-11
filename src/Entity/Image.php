<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ImageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table(name="image", indexes={@ORM\Index(name="FK_IMAGE_APP02_ARTICLE", columns={"article_id"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass=ImageRepository::class)
 * @ApiResource()
 */
class Image
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_image", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idImage;

    /**
     * @var string
     *
     * @ORM\Column(name="chemin_image", type="string", length=255, nullable=false)
     */
    private $cheminImage;

    /**
     * @var \Article
     *
     * @ORM\ManyToOne(targetEntity="Article")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="article_id", referencedColumnName="id_article")
     * })
     */
    private $article;

    public function getIdImage(): ?int
    {
        return $this->idImage;
    }

    public function getCheminImage(): ?string
    {
        return $this->cheminImage;
    }

    public function setCheminImage(string $cheminImage): self
    {
        $this->cheminImage = $cheminImage;

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


}
