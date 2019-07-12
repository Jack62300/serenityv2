<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserWhitelist
 *
 * @ORM\Table(name="user_whitelist")
 * @ORM\Entity
 */
class UserWhitelist
{
    /**
     * @var string
     *
     * @ORM\Column(name="identifier", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $identifier;

    /**
     * @var bool
     *
     * @ORM\Column(name="whitelisted", type="boolean", nullable=false)
     */
    private $whitelisted;

    public function getIdentifier(): ?string
    {
        return $this->identifier;
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
