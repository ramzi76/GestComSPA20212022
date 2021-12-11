<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ExerciceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Exercice
 *
 * @ORM\Table(name="exercice")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass=ExerciceRepository::class)
 * @ApiResource()
 */
class Exercice
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_exercice", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idExercice;

    /**
     * @var int
     *
     * @ORM\Column(name="annee_exercice", type="integer", nullable=false)
     */
    private $anneeExercice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debut_exercice", type="date", nullable=false)
     */
    private $debutExercice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin_exercice", type="date", nullable=false)
     */
    private $finExercice;

    /**
     * @var string
     *
     * @ORM\Column(name="design_societe_fr", type="string", length=255, nullable=false)
     */
    private $designSocieteFr;

    /**
     * @var string
     *
     * @ORM\Column(name="design_societe_ar", type="string", length=255, nullable=false)
     */
    private $designSocieteAr;

    /**
     * @var string
     *
     * @ORM\Column(name="timbre", type="decimal", precision=6, scale=3, nullable=false, options={"default"="0.600"})
     */
    private $timbre = '0.600';

    /**
     * @var string
     *
     * @ORM\Column(name="pourcentage_tva", type="decimal", precision=6, scale=2, nullable=false, options={"default"="18.00"})
     */
    private $pourcentageTva = '18.00';

    /**
     * @var string
     *
     * @ORM\Column(name="tel1_societe", type="string", length=20, nullable=false)
     */
    private $tel1Societe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tel2_societe", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $tel2Societe = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="fax_societe", type="string", length=20, nullable=false)
     */
    private $faxSociete;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_societe", type="string", length=255, nullable=false)
     */
    private $adresseSociete;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mail_societe", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $mailSociete = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="site_web_societe", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $siteWebSociete = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="logo1_societe", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $logo1Societe = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="cloturee", type="boolean", nullable=false)
     */
    private $cloturee = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_cloture", type="datetime", nullable=true)
     */
    private $dateCloture = NULL;

    public function getIdExercice(): ?int
    {
        return $this->idExercice;
    }

    public function getAnneeExercice(): ?int
    {
        return $this->anneeExercice;
    }

    public function setAnneeExercice(int $anneeExercice): self
    {
        $this->anneeExercice = $anneeExercice;

        return $this;
    }

    public function getDebutExercice(): ?\DateTimeInterface
    {
        return $this->debutExercice;
    }

    public function setDebutExercice(\DateTimeInterface $debutExercice): self
    {
        $this->debutExercice = $debutExercice;

        return $this;
    }

    public function getFinExercice(): ?\DateTimeInterface
    {
        return $this->finExercice;
    }

    public function setFinExercice(\DateTimeInterface $finExercice): self
    {
        $this->finExercice = $finExercice;

        return $this;
    }

    public function getDesignSocieteFr(): ?string
    {
        return $this->designSocieteFr;
    }

    public function setDesignSocieteFr(string $designSocieteFr): self
    {
        $this->designSocieteFr = $designSocieteFr;

        return $this;
    }

    public function getDesignSocieteAr(): ?string
    {
        return $this->designSocieteAr;
    }

    public function setDesignSocieteAr(string $designSocieteAr): self
    {
        $this->designSocieteAr = $designSocieteAr;

        return $this;
    }

    public function getTimbre(): ?string
    {
        return $this->timbre;
    }

    public function setTimbre(string $timbre): self
    {
        $this->timbre = $timbre;

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

    public function getTel1Societe(): ?string
    {
        return $this->tel1Societe;
    }

    public function setTel1Societe(string $tel1Societe): self
    {
        $this->tel1Societe = $tel1Societe;

        return $this;
    }

    public function getTel2Societe(): ?string
    {
        return $this->tel2Societe;
    }

    public function setTel2Societe(?string $tel2Societe): self
    {
        $this->tel2Societe = $tel2Societe;

        return $this;
    }

    public function getFaxSociete(): ?string
    {
        return $this->faxSociete;
    }

    public function setFaxSociete(string $faxSociete): self
    {
        $this->faxSociete = $faxSociete;

        return $this;
    }

    public function getAdresseSociete(): ?string
    {
        return $this->adresseSociete;
    }

    public function setAdresseSociete(string $adresseSociete): self
    {
        $this->adresseSociete = $adresseSociete;

        return $this;
    }

    public function getMailSociete(): ?string
    {
        return $this->mailSociete;
    }

    public function setMailSociete(?string $mailSociete): self
    {
        $this->mailSociete = $mailSociete;

        return $this;
    }

    public function getSiteWebSociete(): ?string
    {
        return $this->siteWebSociete;
    }

    public function setSiteWebSociete(?string $siteWebSociete): self
    {
        $this->siteWebSociete = $siteWebSociete;

        return $this;
    }

    public function getLogo1Societe(): ?string
    {
        return $this->logo1Societe;
    }

    public function setLogo1Societe(?string $logo1Societe): self
    {
        $this->logo1Societe = $logo1Societe;

        return $this;
    }

    public function getCloturee(): ?bool
    {
        return $this->cloturee;
    }

    public function setCloturee(bool $cloturee): self
    {
        $this->cloturee = $cloturee;

        return $this;
    }

    public function getDateCloture(): ?\DateTimeInterface
    {
        return $this->dateCloture;
    }

    public function setDateCloture(?\DateTimeInterface $dateCloture): self
    {
        $this->dateCloture = $dateCloture;

        return $this;
    }


}
