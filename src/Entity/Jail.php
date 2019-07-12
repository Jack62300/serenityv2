<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jail
 *
 * @ORM\Table(name="jail")
 * @ORM\Entity
 */
class Jail
{
    /**
     * @var string
     *
     * @ORM\Column(name="identifier", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $identifier;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="isjailed", type="boolean", nullable=true)
     */
    private $isjailed;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="J_Time", type="datetime", nullable=false)
     */
    private $jTime;

    /**
     * @var string
     *
     * @ORM\Column(name="J_Cell", type="string", length=20, nullable=false)
     */
    private $jCell;

    /**
     * @var string
     *
     * @ORM\Column(name="Jailer", type="string", length=100, nullable=false)
     */
    private $jailer;

    /**
     * @var string
     *
     * @ORM\Column(name="Jailer_ID", type="string", length=100, nullable=false)
     */
    private $jailerId;

    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    public function getIsjailed(): ?bool
    {
        return $this->isjailed;
    }

    public function setIsjailed(?bool $isjailed): self
    {
        $this->isjailed = $isjailed;

        return $this;
    }

    public function getJTime(): ?\DateTimeInterface
    {
        return $this->jTime;
    }

    public function setJTime(\DateTimeInterface $jTime): self
    {
        $this->jTime = $jTime;

        return $this;
    }

    public function getJCell(): ?string
    {
        return $this->jCell;
    }

    public function setJCell(string $jCell): self
    {
        $this->jCell = $jCell;

        return $this;
    }

    public function getJailer(): ?string
    {
        return $this->jailer;
    }

    public function setJailer(string $jailer): self
    {
        $this->jailer = $jailer;

        return $this;
    }

    public function getJailerId(): ?string
    {
        return $this->jailerId;
    }

    public function setJailerId(string $jailerId): self
    {
        $this->jailerId = $jailerId;

        return $this;
    }


}
