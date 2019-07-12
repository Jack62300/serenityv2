<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DatastoreData
 *
 * @ORM\Table(name="datastore_data", uniqueConstraints={@ORM\UniqueConstraint(name="index_datastore_data_name_owner", columns={"name", "owner"})}, indexes={@ORM\Index(name="index_datastore_data_name", columns={"name"})})
 * @ORM\Entity
 */
class DatastoreData
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
     * @ORM\Column(name="name", type="string", length=60, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="owner", type="string", length=60, nullable=true)
     */
    private $owner;

    /**
     * @var string|null
     *
     * @ORM\Column(name="data", type="text", length=0, nullable=true)
     */
    private $data;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getOwner(): ?string
    {
        return $this->owner;
    }

    public function setOwner(?string $owner): self
    {
        $this->owner = $owner;

        return $this;
    }

    public function getData(): ?string
    {
        return $this->data;
    }

    public function setData(?string $data): self
    {
        $this->data = $data;

        return $this;
    }


}
