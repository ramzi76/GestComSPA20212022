<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ContactRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Contact
 *
 * @ORM\Table(name="contact", indexes={@ORM\Index(name="FK_CONTACT_APP07_CLIENT", columns={"client_id"}), @ORM\Index(name="FK_CONTACT_APP12_FOURNISS", columns={"fournisseur_id"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass=ContactRepository::class)
 * @ApiResource()
 */
class Contact
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_contact", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idContact;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=30, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=30, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="civilite", type="string", length=20, nullable=false, options={"default"="'M.'"})
     * @Assert\Choice(choices={"M.", "Mme.", "Melle."}, message="La civilité doit être M. ou Mme ou Melle ! ")
     * @Assert\NotBlank(message="LA civilité est obligatoire ! ")
     */
    private $civilite = '\'M.\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="poste", type="string", length=30, nullable=true, options={"default"="NULL"})
     */
    private $poste = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="tel1", type="string", length=20, nullable=false)
     */
    private $tel1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tel2", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $tel2 = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="fax1", type="string", length=20, nullable=false)
     */
    private $fax1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fax2", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $fax2 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="portable1", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $portable1 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="portable2", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $portable2 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="mail", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $mail = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="site_web", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $siteWeb = 'NULL';

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_id", referencedColumnName="id_client")
     * })
     */
    private $client;

    /**
     * @var \Fournisseur
     *
     * @ORM\ManyToOne(targetEntity="Fournisseur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fournisseur_id", referencedColumnName="id_fournisseur")
     * })
     */
    private $fournisseur;

    public function getIdContact(): ?int
    {
        return $this->idContact;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getCivilite(): ?string
    {
        return $this->civilite;
    }

    public function setCivilite(string $civilite): self
    {
        $this->civilite = $civilite;

        return $this;
    }

    public function getPoste(): ?string
    {
        return $this->poste;
    }

    public function setPoste(?string $poste): self
    {
        $this->poste = $poste;

        return $this;
    }

    public function getTel1(): ?string
    {
        return $this->tel1;
    }

    public function setTel1(string $tel1): self
    {
        $this->tel1 = $tel1;

        return $this;
    }

    public function getTel2(): ?string
    {
        return $this->tel2;
    }

    public function setTel2(?string $tel2): self
    {
        $this->tel2 = $tel2;

        return $this;
    }

    public function getFax1(): ?string
    {
        return $this->fax1;
    }

    public function setFax1(string $fax1): self
    {
        $this->fax1 = $fax1;

        return $this;
    }

    public function getFax2(): ?string
    {
        return $this->fax2;
    }

    public function setFax2(?string $fax2): self
    {
        $this->fax2 = $fax2;

        return $this;
    }

    public function getPortable1(): ?string
    {
        return $this->portable1;
    }

    public function setPortable1(?string $portable1): self
    {
        $this->portable1 = $portable1;

        return $this;
    }

    public function getPortable2(): ?string
    {
        return $this->portable2;
    }

    public function setPortable2(?string $portable2): self
    {
        $this->portable2 = $portable2;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getSiteWeb(): ?string
    {
        return $this->siteWeb;
    }

    public function setSiteWeb(?string $siteWeb): self
    {
        $this->siteWeb = $siteWeb;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getFournisseur(): ?Fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?Fournisseur $fournisseur): self
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }


}
