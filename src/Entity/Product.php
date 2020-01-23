<?php

namespace App\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Product
 *
 * @package App\Entity
 *
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
{
    /**
     * @var int|null
     *
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string")
     */
    private $reference;

    /**
     * @var Collection|Brand
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Brand", inversedBy="product")
     * @ORM\JoinColumn(name="brand_id", referencedColumnName="id", onDelete="CASCADE", nullable=false)
     */
    private $brand;

    /**
     * @var string|null
     *
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @var float|null
     *
     * @ORM\Column(type="decimal", precision=32, scale=2)
     */
    private $prix;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * @param string|null $reference
     */
    public function setReference(?string $reference): void
    {
        $this->reference = $reference;
    }

    /**
     * @return Collection|Brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param Collection|Brand $brand
     */
    public function setBrand($brand): void
    {
        $this->brand = $brand;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return float|null
     */
    public function getPrix(): ?float
    {
        return $this->prix;
    }

    /**
     * @param float|null $prix
     */
    public function setPrix(?float $prix): void
    {
        $this->prix = $prix;
    }

}
