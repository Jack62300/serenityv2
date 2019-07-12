<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ExtensionMailRepository")
 */
class ExtensionMail
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $namet;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $jobLocked;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNamet(): ?string
    {
        return $this->namet;
    }

    public function setNamet(string $namet): self
    {
        $this->namet = $namet;

        return $this;
    }

    public function getJobLocked(): ?string
    {
        return $this->jobLocked;
    }

    public function setJobLocked(string $jobLocked): self
    {
        $this->jobLocked = $jobLocked;

        return $this;
    }
}
