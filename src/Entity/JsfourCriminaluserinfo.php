<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JsfourCriminaluserinfo
 *
 * @ORM\Table(name="jsfour_criminaluserinfo")
 * @ORM\Entity
 */
class JsfourCriminaluserinfo
{
    /**
     * @var string
     *
     * @ORM\Column(name="identifier", type="string", length=160, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $identifier;

    /**
     * @var string|null
     *
     * @ORM\Column(name="aliases", type="string", length=255, nullable=true)
     */
    private $aliases;

    /**
     * @var string|null
     *
     * @ORM\Column(name="recordid", type="string", length=255, nullable=true)
     */
    private $recordid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="weight", type="string", length=255, nullable=true)
     */
    private $weight;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eyecolor", type="string", length=255, nullable=true)
     */
    private $eyecolor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="haircolor", type="string", length=255, nullable=true)
     */
    private $haircolor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="firstname", type="string", length=255, nullable=true)
     */
    private $firstname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastname", type="string", length=255, nullable=true)
     */
    private $lastname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dob", type="string", length=255, nullable=true)
     */
    private $dob;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sex", type="string", length=255, nullable=true)
     */
    private $sex;

    /**
     * @var string|null
     *
     * @ORM\Column(name="height", type="string", length=255, nullable=true)
     */
    private $height;

    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    public function getAliases(): ?string
    {
        return $this->aliases;
    }

    public function setAliases(?string $aliases): self
    {
        $this->aliases = $aliases;

        return $this;
    }

    public function getRecordid(): ?string
    {
        return $this->recordid;
    }

    public function setRecordid(?string $recordid): self
    {
        $this->recordid = $recordid;

        return $this;
    }

    public function getWeight(): ?string
    {
        return $this->weight;
    }

    public function setWeight(?string $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getEyecolor(): ?string
    {
        return $this->eyecolor;
    }

    public function setEyecolor(?string $eyecolor): self
    {
        $this->eyecolor = $eyecolor;

        return $this;
    }

    public function getHaircolor(): ?string
    {
        return $this->haircolor;
    }

    public function setHaircolor(?string $haircolor): self
    {
        $this->haircolor = $haircolor;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;

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

    public function getSex(): ?string
    {
        return $this->sex;
    }

    public function setSex(?string $sex): self
    {
        $this->sex = $sex;

        return $this;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setHeight(?string $height): self
    {
        $this->height = $height;

        return $this;
    }


}
