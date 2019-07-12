<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserLicenses
 *
 * @ORM\Table(name="user_licenses")
 * @ORM\Entity
 */
class UserLicenses
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=60, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="owner", type="string", length=60, nullable=false)
     */
    private $owner;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getOwner(): ?string
    {
        return $this->owner;
    }

    public function setOwner(string $owner): self
    {
        $this->owner = $owner;

        return $this;
    }


}
