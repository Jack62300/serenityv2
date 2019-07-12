<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RentedDock
 *
 * @ORM\Table(name="rented_dock")
 * @ORM\Entity
 */
class RentedDock
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
     * @ORM\Column(name="vehicle", type="string", length=60, nullable=false)
     */
    private $vehicle;

    /**
     * @var string
     *
     * @ORM\Column(name="plate", type="string", length=10, nullable=false)
     */
    private $plate;

    /**
     * @var string
     *
     * @ORM\Column(name="player_name", type="string", length=255, nullable=false)
     */
    private $playerName;

    /**
     * @var int
     *
     * @ORM\Column(name="base_price", type="integer", nullable=false)
     */
    private $basePrice;

    /**
     * @var int
     *
     * @ORM\Column(name="rent_price", type="integer", nullable=false)
     */
    private $rentPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="owner", type="string", length=255, nullable=false)
     */
    private $owner;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVehicle(): ?string
    {
        return $this->vehicle;
    }

    public function setVehicle(string $vehicle): self
    {
        $this->vehicle = $vehicle;

        return $this;
    }

    public function getPlate(): ?string
    {
        return $this->plate;
    }

    public function setPlate(string $plate): self
    {
        $this->plate = $plate;

        return $this;
    }

    public function getPlayerName(): ?string
    {
        return $this->playerName;
    }

    public function setPlayerName(string $playerName): self
    {
        $this->playerName = $playerName;

        return $this;
    }

    public function getBasePrice(): ?int
    {
        return $this->basePrice;
    }

    public function setBasePrice(int $basePrice): self
    {
        $this->basePrice = $basePrice;

        return $this;
    }

    public function getRentPrice(): ?int
    {
        return $this->rentPrice;
    }

    public function setRentPrice(int $rentPrice): self
    {
        $this->rentPrice = $rentPrice;

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
