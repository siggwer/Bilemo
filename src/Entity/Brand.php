<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Brand
 *
 * @package App\Entity
 *
 * @ORM\Entity(repositoryClass="App\Repository\BrandRepository")
 */
class Brand
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
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @var Product
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Product", mappedBy="brand")
     */
    private $product;

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
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param Product $product
     */
    public function setProduct($product): void
    {
        $this->product = $product;
    }
}
