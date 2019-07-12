<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VehiclesForSale
 *
 * @ORM\Table(name="vehicles_for_sale")
 * @ORM\Entity
 */
class VehiclesForSale
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
     * @ORM\Column(name="seller", type="string", length=50, nullable=false)
     */
    private $seller;

    /**
     * @var string
     *
     * @ORM\Column(name="vehicleProps", type="text", length=0, nullable=false)
     */
    private $vehicleprops;

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

    public function getSeller(): ?string
    {
        return $this->seller;
    }

    public function setSeller(string $seller): self
    {
        $this->seller = $seller;

        return $this;
    }

    public function getVehicleprops(): ?string
    {
        return $this->vehicleprops;
    }

    public function setVehicleprops(string $vehicleprops): self
    {
        $this->vehicleprops = $vehicleprops;

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
