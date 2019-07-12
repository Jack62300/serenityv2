<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OwnedDock
 *
 * @ORM\Table(name="owned_dock")
 * @ORM\Entity
 */
class OwnedDock
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
     * @ORM\Column(name="vehicle", type="text", length=0, nullable=false)
     */
    private $vehicle;

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

    public function getVehicle(): ?string
    {
        return $this->vehicle;
    }

    public function setVehicle(string $vehicle): self
    {
        $this->vehicle = $vehicle;

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
