<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OwnedProperties
 *
 * @ORM\Table(name="owned_properties")
 * @ORM\Entity
 */
class OwnedProperties
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=false)
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="rented", type="integer", nullable=false)
     */
    private $rented;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getRented(): ?int
    {
        return $this->rented;
    }

    public function setRented(int $rented): self
    {
        $this->rented = $rented;

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
