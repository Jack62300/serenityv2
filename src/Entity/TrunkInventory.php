<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrunkInventory
 *
 * @ORM\Table(name="trunk_inventory", uniqueConstraints={@ORM\UniqueConstraint(name="plate", columns={"plate"})})
 * @ORM\Entity
 */
class TrunkInventory
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
     * @ORM\Column(name="plate", type="string", length=8, nullable=false)
     */
    private $plate;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="text", length=65535, nullable=false)
     */
    private $data;

    /**
     * @var int
     *
     * @ORM\Column(name="owned", type="integer", nullable=false)
     */
    private $owned;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getData(): ?string
    {
        return $this->data;
    }

    public function setData(string $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getOwned(): ?int
    {
        return $this->owned;
    }

    public function setOwned(int $owned): self
    {
        $this->owned = $owned;

        return $this;
    }


}
