<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Items
 *
 * @ORM\Table(name="items")
 * @ORM\Entity
 */
class Items
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
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=false)
     */
    private $label;

    /**
     * @var int
     *
     * @ORM\Column(name="limit", type="integer", nullable=false, options={"default"="-1"})
     */
    private $limit = '-1';

    /**
     * @var int
     *
     * @ORM\Column(name="rare", type="integer", nullable=false)
     */
    private $rare;

    /**
     * @var int
     *
     * @ORM\Column(name="can_remove", type="integer", nullable=false, options={"default"="1"})
     */
    private $canRemove = '1';

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

    public function getLimit(): ?int
    {
        return $this->limit;
    }

    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function getRare(): ?int
    {
        return $this->rare;
    }

    public function setRare(int $rare): self
    {
        $this->rare = $rare;

        return $this;
    }

    public function getCanRemove(): ?int
    {
        return $this->canRemove;
    }

    public function setCanRemove(int $canRemove): self
    {
        $this->canRemove = $canRemove;

        return $this;
    }


}
