<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhoneMessages
 *
 * @ORM\Table(name="phone_messages")
 * @ORM\Entity
 */
class PhoneMessages
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
     * @ORM\Column(name="transmitter", type="string", length=10, nullable=false)
     */
    private $transmitter;

    /**
     * @var string
     *
     * @ORM\Column(name="receiver", type="string", length=10, nullable=false)
     */
    private $receiver;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=255, nullable=false)
     */
    private $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $time = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="isRead", type="integer", nullable=false)
     */
    private $isread;

    /**
     * @var int
     *
     * @ORM\Column(name="owner", type="integer", nullable=false)
     */
    private $owner;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTransmitter(): ?string
    {
        return $this->transmitter;
    }

    public function setTransmitter(string $transmitter): self
    {
        $this->transmitter = $transmitter;

        return $this;
    }

    public function getReceiver(): ?string
    {
        return $this->receiver;
    }

    public function setReceiver(string $receiver): self
    {
        $this->receiver = $receiver;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

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

    public function getIsread(): ?int
    {
        return $this->isread;
    }

    public function setIsread(int $isread): self
    {
        $this->isread = $isread;

        return $this;
    }

    public function getOwner(): ?int
    {
        return $this->owner;
    }

    public function setOwner(int $owner): self
    {
        $this->owner = $owner;

        return $this;
    }


}
