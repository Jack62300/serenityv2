<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhoneCalls
 *
 * @ORM\Table(name="phone_calls")
 * @ORM\Entity
 */
class PhoneCalls
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
     * @ORM\Column(name="owner", type="string", length=10, nullable=false, options={"comment"="Num tel proprio"})
     */
    private $owner;

    /**
     * @var string
     *
     * @ORM\Column(name="num", type="string", length=10, nullable=false, options={"comment"="Num reférence du contact"})
     */
    private $num;

    /**
     * @var int
     *
     * @ORM\Column(name="incoming", type="integer", nullable=false, options={"comment"="Défini si on est à l'origine de l'appels"})
     */
    private $incoming;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $time = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="accepts", type="integer", nullable=false, options={"comment"="Appels accepter ou pas"})
     */
    private $accepts;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOwner(): ?string
    {
        return $this->owner;
    }

    public function setOwner(string $owner): self
    {
        $this->owner = $owner;

        return $this;
    }

    public function getNum(): ?string
    {
        return $this->num;
    }

    public function setNum(string $num): self
    {
        $this->num = $num;

        return $this;
    }

    public function getIncoming(): ?int
    {
        return $this->incoming;
    }

    public function setIncoming(int $incoming): self
    {
        $this->incoming = $incoming;

        return $this;
    }

    public function getTime(): ?\DateTimeInterface
    {
        return $this->time;
    }

    public function setTime(\DateTimeInterface $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getAccepts(): ?int
    {
        return $this->accepts;
    }

    public function setAccepts(int $accepts): self
    {
        $this->accepts = $accepts;

        return $this;
    }


}
