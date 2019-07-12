<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WeeklyRun
 *
 * @ORM\Table(name="weekly_run")
 * @ORM\Entity
 */
class WeeklyRun
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
     * @ORM\Column(name="company", type="string", length=255, nullable=false)
     */
    private $company;

    /**
     * @var int
     *
     * @ORM\Column(name="start_date", type="integer", nullable=false)
     */
    private $startDate;

    /**
     * @var int
     *
     * @ORM\Column(name="harvest", type="integer", nullable=false)
     */
    private $harvest;

    /**
     * @var int
     *
     * @ORM\Column(name="sell", type="integer", nullable=false)
     */
    private $sell;

    /**
     * @var int
     *
     * @ORM\Column(name="malus", type="integer", nullable=false)
     */
    private $malus;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(string $company): self
    {
        $this->company = $company;

        return $this;
    }

    public function getStartDate(): ?int
    {
        return $this->startDate;
    }

    public function setStartDate(int $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getHarvest(): ?int
    {
        return $this->harvest;
    }

    public function setHarvest(int $harvest): self
    {
        $this->harvest = $harvest;

        return $this;
    }

    public function getSell(): ?int
    {
        return $this->sell;
    }

    public function setSell(int $sell): self
    {
        $this->sell = $sell;

        return $this;
    }

    public function getMalus(): ?int
    {
        return $this->malus;
    }

    public function setMalus(int $malus): self
    {
        $this->malus = $malus;

        return $this;
    }


}
