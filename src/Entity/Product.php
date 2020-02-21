<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Hateoas\Configuration\Annotation as Hateoas;
use JMS\SERIALIZER\Annotation as SERIALIZER;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Product
 *
 * @package App\Entity
 *
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 *
 * @Hateoas\Relation(
 *     "read",
 *      href=@Hateoas\Route(
 *          "product_read",
 *          parameters = {"id" = "expr(object.getId())"}
 *      )
 * )
 * @Hateoas\Relation(
 *     "brand",
 *      embedded="expr(object.getBrand())"
 * )
 *
 * @SERIALIZER\ExclusionPolicy("all")
 */
class Product extends AbstractEntity
{
    /**
     * @var string|null
     *
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="This value should not be blank")
     *
     * @SERIALIZER\Expose()
     * @SERIALIZER\Groups({"detail_product", "list_product"})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="This value should not be blank")
     *
     * @SERIALIZER\Expose()
     * @SERIALIZER\Groups({"detail_product", "list_product"})
     */
    private $reference;

    /**
     * @var Brand
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Brand", cascade={"persist"})
     */
    private $brand;

    /**
     * @var string|null
     *
     * @ORM\Column(type="text")
     *
     * @Assert\NotBlank(message="This value should not be blank")
     *
     * @SERIALIZER\Expose()
     * @SERIALIZER\Groups({"detail_product", "list_product"})
     */
    private $description;

    /**
     * @var float|null
     *
     * @ORM\Column(type="decimal", precision=32, scale=2)
     *
     * @Assert\NotBlank(message="This value should not be blank")
     * @Assert\Positive(message="This value should not be equal to 0 or negative")
     *
     * @SERIALIZER\Expose()
     * @SERIALIZER\Groups({"detail_product", "list_product"})
     */
    private $price;

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
     * @return Brand
     */
    public function getBrand(): Brand
    {
        return $this->brand;
    }

    /**
     * @param Brand $brand
     */
    public function setBrand(Brand $brand): void
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
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @param float|null $price
     */
    public function setPrice(?float $price): void
    {
        $this->price = $price;
    }
}
