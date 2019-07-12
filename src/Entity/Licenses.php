<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Licenses
 *
 * @ORM\Table(name="licenses")
 * @ORM\Entity
 */
class Licenses
{
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=60, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=60, nullable=false)
     */
    private $label;

    public function getType(): ?string
    {
        return $this->type;
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


}
