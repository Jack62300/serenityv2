<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jobs
 *
 * @ORM\Table(name="jobs")
 * @ORM\Entity
 */
class Jobs
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=true)
     */
    private $label;

    /**
     * @var bool
     *
     * @ORM\Column(name="whitelisted", type="boolean", nullable=false)
     */
    private $whitelisted;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getWhitelisted(): ?bool
    {
        return $this->whitelisted;
    }

    public function setWhitelisted(bool $whitelisted): self
    {
        $this->whitelisted = $whitelisted;

        return $this;
    }


}
