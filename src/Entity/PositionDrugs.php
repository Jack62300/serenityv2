<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PositionDrugs
 *
 * @ORM\Table(name="position_drugs")
 * @ORM\Entity
 */
class PositionDrugs
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
     * @ORM\Column(name="identifier", type="string", length=255, nullable=false)
     */
    private $identifier;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var float
     *
     * @ORM\Column(name="x", type="float", precision=8, scale=2, nullable=false)
     */
    private $x;

    /**
     * @var float
     *
     * @ORM\Column(name="y", type="float", precision=8, scale=2, nullable=false)
     */
    private $y;

    /**
     * @var float
     *
     * @ORM\Column(name="z", type="float", precision=8, scale=2, nullable=false)
     */
    private $z;

    /**
     * @var float|null
     *
     * @ORM\Column(name="percent", type="float", precision=8, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $percent = '0.00';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    public function setIdentifier(string $identifier): self
    {
        $this->identifier = $identifier;

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

    public function getX(): ?float
    {
        return $this->x;
    }

    public function setX(float $x): self
    {
        $this->x = $x;

        return $this;
    }

    public function getY(): ?float
    {
        return $this->y;
    }

    public function setY(float $y): self
    {
        $this->y = $y;

        return $this;
    }

    public function getZ(): ?float
    {
        return $this->z;
    }

    public function setZ(float $z): self
    {
        $this->z = $z;

        return $this;
    }

    public function getPercent(): ?float
    {
        return $this->percent;
    }

    public function setPercent(?float $percent): self
    {
        $this->percent = $percent;

        return $this;
    }


}
