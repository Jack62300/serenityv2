<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CardealerVehicles
 *
 * @ORM\Table(name="cardealer_vehicles")
 * @ORM\Entity
 */
class CardealerVehicles
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
     * @ORM\Column(name="vehicle", type="string", length=255, nullable=false)
     */
    private $vehicle;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
    private $price;

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

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }


}
