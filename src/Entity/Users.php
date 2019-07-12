<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users", uniqueConstraints={@ORM\UniqueConstraint(name="identifier", columns={"identifier"})})
 * @ORM\Entity
 */
class Users
{
    /**
     * @var string
     *
     * @ORM\Column(name="identifier", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $identifier;

    /**
     * @var string|null
     *
     * @ORM\Column(name="license", type="string", length=50, nullable=true)
     */
    private $license;

    /**
     * @var int|null
     *
     * @ORM\Column(name="money", type="integer", nullable=true)
     */
    private $money;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="skin", type="text", length=0, nullable=true)
     */
    private $skin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="job", type="string", length=255, nullable=true, options={"default"="unemployed"})
     */
    private $job = 'unemployed';

    /**
     * @var int|null
     *
     * @ORM\Column(name="job_grade", type="integer", nullable=true)
     */
    private $jobGrade = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="loadout", type="text", length=0, nullable=true)
     */
    private $loadout;

    /**
     * @var string|null
     *
     * @ORM\Column(name="position", type="string", length=255, nullable=true)
     */
    private $position;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bank", type="integer", nullable=true)
     */
    private $bank;

    /**
     * @var int|null
     *
     * @ORM\Column(name="permission_level", type="integer", nullable=true)
     */
    private $permissionLevel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="group", type="string", length=50, nullable=true)
     */
    private $group;

    /**
     * @var string|null
     *
     * @ORM\Column(name="firstname", type="string", length=50, nullable=true)
     */
    private $firstname = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastname", type="string", length=50, nullable=true)
     */
    private $lastname = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="dateofbirth", type="string", length=25, nullable=true)
     */
    private $dateofbirth = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="sex", type="string", length=10, nullable=true)
     */
    private $sex = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="height", type="string", length=5, nullable=true)
     */
    private $height = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_number", type="string", length=10, nullable=true)
     */
    private $phoneNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="text", length=0, nullable=true)
     */
    private $status;

    /**
     * @var string|null
     *
     * @ORM\Column(name="animal", type="string", length=50, nullable=true)
     */
    private $animal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_property", type="string", length=255, nullable=true)
     */
    private $lastProperty;

    /**
     * @var int
     *
     * @ORM\Column(name="jail", type="integer", nullable=false)
     */
    private $jail = '0';

    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    public function getLicense(): ?string
    {
        return $this->license;
    }

    public function setLicense(?string $license): self
    {
        $this->license = $license;

        return $this;
    }

    public function getMoney(): ?int
    {
        return $this->money;
    }

    public function setMoney(?int $money): self
    {
        $this->money = $money;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSkin(): ?string
    {
        return $this->skin;
    }

    public function setSkin(?string $skin): self
    {
        $this->skin = $skin;

        return $this;
    }

    public function getJob(): ?string
    {
        return $this->job;
    }

    public function setJob(?string $job): self
    {
        $this->job = $job;

        return $this;
    }

    public function getJobGrade(): ?int
    {
        return $this->jobGrade;
    }

    public function setJobGrade(?int $jobGrade): self
    {
        $this->jobGrade = $jobGrade;

        return $this;
    }

    public function getLoadout(): ?string
    {
        return $this->loadout;
    }

    public function setLoadout(?string $loadout): self
    {
        $this->loadout = $loadout;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(?string $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getBank(): ?int
    {
        return $this->bank;
    }

    public function setBank(?int $bank): self
    {
        $this->bank = $bank;

        return $this;
    }

    public function getPermissionLevel(): ?int
    {
        return $this->permissionLevel;
    }

    public function setPermissionLevel(?int $permissionLevel): self
    {
        $this->permissionLevel = $permissionLevel;

        return $this;
    }

    public function getGroup(): ?string
    {
        return $this->group;
    }

    public function setGroup(?string $group): self
    {
        $this->group = $group;

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

    public function getDateofbirth(): ?string
    {
        return $this->dateofbirth;
    }

    public function setDateofbirth(?string $dateofbirth): self
    {
        $this->dateofbirth = $dateofbirth;

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

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(?string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getAnimal(): ?string
    {
        return $this->animal;
    }

    public function setAnimal(?string $animal): self
    {
        $this->animal = $animal;

        return $this;
    }

    public function getLastProperty(): ?string
    {
        return $this->lastProperty;
    }

    public function setLastProperty(?string $lastProperty): self
    {
        $this->lastProperty = $lastProperty;

        return $this;
    }

    public function getJail(): ?int
    {
        return $this->jail;
    }

    public function setJail(int $jail): self
    {
        $this->jail = $jail;

        return $this;
    }


}
