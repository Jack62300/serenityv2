<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AddonAccountData
 *
 * @ORM\Table(name="addon_account_data", uniqueConstraints={@ORM\UniqueConstraint(name="index_addon_account_data_account_name_owner", columns={"account_name", "owner"})}, indexes={@ORM\Index(name="index_addon_account_data_account_name", columns={"account_name"})})
 * @ORM\Entity
 */
class AddonAccountData
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
     * @ORM\Column(name="account_name", type="string", length=100, nullable=true)
     */
    private $accountName;

    /**
     * @var int
     *
     * @ORM\Column(name="money", type="integer", nullable=false)
     */
    private $money;

    /**
     * @var string|null
     *
     * @ORM\Column(name="owner", type="string", length=100, nullable=true)
     */
    private $owner;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    public function setAccountName(?string $accountName): self
    {
        $this->accountName = $accountName;

        return $this;
    }

    public function getMoney(): ?int
    {
        return $this->money;
    }

    public function setMoney(int $money): self
    {
        $this->money = $money;

        return $this;
    }

    public function getOwner(): ?string
    {
        return $this->owner;
    }

    public function setOwner(?string $owner): self
    {
        $this->owner = $owner;

        return $this;
    }


}
