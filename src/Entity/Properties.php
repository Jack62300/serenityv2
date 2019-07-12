<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Properties
 *
 * @ORM\Table(name="properties")
 * @ORM\Entity
 */
class Properties
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=true)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="entering", type="string", length=255, nullable=true)
     */
    private $entering;

    /**
     * @var string|null
     *
     * @ORM\Column(name="exit", type="string", length=255, nullable=true)
     */
    private $exit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="inside", type="string", length=255, nullable=true)
     */
    private $inside;

    /**
     * @var string|null
     *
     * @ORM\Column(name="outside", type="string", length=255, nullable=true)
     */
    private $outside;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ipls", type="string", length=255, nullable=true, options={"default"="[]"})
     */
    private $ipls = '[]';

    /**
     * @var string|null
     *
     * @ORM\Column(name="gateway", type="string", length=255, nullable=true)
     */
    private $gateway;

    /**
     * @var int|null
     *
     * @ORM\Column(name="is_single", type="integer", nullable=true)
     */
    private $isSingle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="is_room", type="integer", nullable=true)
     */
    private $isRoom;

    /**
     * @var int|null
     *
     * @ORM\Column(name="is_gateway", type="integer", nullable=true)
     */
    private $isGateway;

    /**
     * @var string|null
     *
     * @ORM\Column(name="room_menu", type="string", length=255, nullable=true)
     */
    private $roomMenu;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
    private $price;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
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

    public function getEntering(): ?string
    {
        return $this->entering;
    }

    public function setEntering(?string $entering): self
    {
        $this->entering = $entering;

        return $this;
    }

    public function getExit(): ?string
    {
        return $this->exit;
    }

    public function setExit(?string $exit): self
    {
        $this->exit = $exit;

        return $this;
    }

    public function getInside(): ?string
    {
        return $this->inside;
    }

    public function setInside(?string $inside): self
    {
        $this->inside = $inside;

        return $this;
    }

    public function getOutside(): ?string
    {
        return $this->outside;
    }

    public function setOutside(?string $outside): self
    {
        $this->outside = $outside;

        return $this;
    }

    public function getIpls(): ?string
    {
        return $this->ipls;
    }

    public function setIpls(?string $ipls): self
    {
        $this->ipls = $ipls;

        return $this;
    }

    public function getGateway(): ?string
    {
        return $this->gateway;
    }

    public function setGateway(?string $gateway): self
    {
        $this->gateway = $gateway;

        return $this;
    }

    public function getIsSingle(): ?int
    {
        return $this->isSingle;
    }

    public function setIsSingle(?int $isSingle): self
    {
        $this->isSingle = $isSingle;

        return $this;
    }

    public function getIsRoom(): ?int
    {
        return $this->isRoom;
    }

    public function setIsRoom(?int $isRoom): self
    {
        $this->isRoom = $isRoom;

        return $this;
    }

    public function getIsGateway(): ?int
    {
        return $this->isGateway;
    }

    public function setIsGateway(?int $isGateway): self
    {
        $this->isGateway = $isGateway;

        return $this;
    }

    public function getRoomMenu(): ?string
    {
        return $this->roomMenu;
    }

    public function setRoomMenu(?string $roomMenu): self
    {
        $this->roomMenu = $roomMenu;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }


}
