<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AddonInventory
 *
 * @ORM\Table(name="addon_inventory")
 * @ORM\Entity
 */
class AddonInventory
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=60, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=100, nullable=false)
     */
    private $label;

    /**
     * @var int
     *
     * @ORM\Column(name="shared", type="integer", nullable=false)
     */
    private $shared;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getShared(): ?int
    {
        return $this->shared;
    }

    public function setShared(int $shared): self
    {
        $this->shared = $shared;

        return $this;
    }


}
