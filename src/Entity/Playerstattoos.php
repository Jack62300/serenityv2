<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Playerstattoos
 *
 * @ORM\Table(name="playerstattoos")
 * @ORM\Entity
 */
class Playerstattoos
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
     * @var string
     *
     * @ORM\Column(name="tattoos", type="string", length=255, nullable=false)
     */
    private $tattoos;

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

    public function getTattoos(): ?string
    {
        return $this->tattoos;
    }

    public function setTattoos(string $tattoos): self
    {
        $this->tattoos = $tattoos;

        return $this;
    }


}
