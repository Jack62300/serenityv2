<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JobGrades
 *
 * @ORM\Table(name="job_grades")
 * @ORM\Entity
 */
class JobGrades
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
     * @var string|null
     *
     * @ORM\Column(name="job_name", type="string", length=255, nullable=true)
     */
    private $jobName;

    /**
     * @var int
     *
     * @ORM\Column(name="grade", type="integer", nullable=false)
     */
    private $grade;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
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
     * @ORM\Column(name="salary", type="integer", nullable=false)
     */
    private $salary;

    /**
     * @var string
     *
     * @ORM\Column(name="skin_male", type="text", length=0, nullable=false)
     */
    private $skinMale;

    /**
     * @var string
     *
     * @ORM\Column(name="skin_female", type="text", length=0, nullable=false)
     */
    private $skinFemale;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJobName(): ?string
    {
        return $this->jobName;
    }

    public function setJobName(?string $jobName): self
    {
        $this->jobName = $jobName;

        return $this;
    }

    public function getGrade(): ?int
    {
        return $this->grade;
    }

    public function setGrade(int $grade): self
    {
        $this->grade = $grade;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
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

    public function getSalary(): ?int
    {
        return $this->salary;
    }

    public function setSalary(int $salary): self
    {
        $this->salary = $salary;

        return $this;
    }

    public function getSkinMale(): ?string
    {
        return $this->skinMale;
    }

    public function setSkinMale(string $skinMale): self
    {
        $this->skinMale = $skinMale;

        return $this;
    }

    public function getSkinFemale(): ?string
    {
        return $this->skinFemale;
    }

    public function setSkinFemale(string $skinFemale): self
    {
        $this->skinFemale = $skinFemale;

        return $this;
    }


}
