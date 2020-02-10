<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

use Exception;

/**
 * Class Brand
 *
 * @package App\Entity
 *
 * @ORM\Entity(repositoryClass="App\Repository\BrandRepository")
 */
class Brand extends AbstractEntity
{
    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="This value should not be blank")
     */
    private $name;

    /**
     * Brand constructor.
     *
     * @throws Exception
     */
    public function __construct()
    {
        parent::__construct();
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
}
