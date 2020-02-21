<?php

namespace App\Entity\Traits;

use JMS\Serializer\Annotation as SERIALIZER;
use Doctrine\ORM\Mapping as ORM;

/**
 * Trait IdTrait
 *
 * @package App\Entity\Traits
 */
trait IdTrait
{
    /**
     * @var string
     *
     * @ORM\Id
     * @ORM\Column(type="uuid")
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="Ramsey\Uuid\Doctrine\UuidGenerator")
     *
     * @SERIALIZER\Type("uuid")
     */
    protected $id;

    /**
     * @param string
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
}