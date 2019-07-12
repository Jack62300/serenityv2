<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VehicleSold
 *
 * @ORM\Table(name="vehicle_sold")
 * @ORM\Entity
 */
class VehicleSold
{
    /**
     * @var string
     *
     * @ORM\Column(name="plate", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $plate;

    /**
     * @var string
     *
     * @ORM\Column(name="client", type="string", length=50, nullable=false)
     */
    private $client;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=50, nullable=false)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="soldby", type="string", length=50, nullable=false)
     */
    private $soldby;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=50, nullable=false)
     */
    private $date;

    public function getPlate(): ?string
    {
        return $this->plate;
    }

    public function getClient(): ?string
    {
        return $this->client;
    }

    public function setClient(string $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getSoldby(): ?string
    {
        return $this->soldby;
    }

    public function setSoldby(string $soldby): self
    {
        $this->soldby = $soldby;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }


}
