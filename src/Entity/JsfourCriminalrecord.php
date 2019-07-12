<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JsfourCriminalrecord
 *
 * @ORM\Table(name="jsfour_criminalrecord")
 * @ORM\Entity
 */
class JsfourCriminalrecord
{
    /**
     * @var string
     *
     * @ORM\Column(name="offense", type="string", length=160, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $offense;

    /**
     * @var string|null
     *
     * @ORM\Column(name="date", type="string", length=255, nullable=true)
     */
    private $date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="institution", type="string", length=255, nullable=true)
     */
    private $institution;

    /**
     * @var string|null
     *
     * @ORM\Column(name="charge", type="string", length=255, nullable=true)
     */
    private $charge;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="term", type="string", length=255, nullable=true)
     */
    private $term;

    /**
     * @var int
     *
     * @ORM\Column(name="classified", type="integer", nullable=false)
     */
    private $classified;

    /**
     * @var string|null
     *
     * @ORM\Column(name="identifier", type="string", length=255, nullable=true)
     */
    private $identifier;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dob", type="string", length=255, nullable=true)
     */
    private $dob;

    /**
     * @var string|null
     *
     * @ORM\Column(name="warden", type="string", length=255, nullable=true)
     */
    private $warden;

    public function getOffense(): ?string
    {
        return $this->offense;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(?string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getInstitution(): ?string
    {
        return $this->institution;
    }

    public function setInstitution(?string $institution): self
    {
        $this->institution = $institution;

        return $this;
    }

    public function getCharge(): ?string
    {
        return $this->charge;
    }

    public function setCharge(?string $charge): self
    {
        $this->charge = $charge;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getTerm(): ?string
    {
        return $this->term;
    }

    public function setTerm(?string $term): self
    {
        $this->term = $term;

        return $this;
    }

    public function getClassified(): ?int
    {
        return $this->classified;
    }

    public function setClassified(int $classified): self
    {
        $this->classified = $classified;

        return $this;
    }

    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    public function setIdentifier(?string $identifier): self
    {
        $this->identifier = $identifier;

        return $this;
    }

    public function getDob(): ?string
    {
        return $this->dob;
    }

    public function setDob(?string $dob): self
    {
        $this->dob = $dob;

        return $this;
    }

    public function getWarden(): ?string
    {
        return $this->warden;
    }

    public function setWarden(?string $warden): self
    {
        $this->warden = $warden;

        return $this;
    }


}
