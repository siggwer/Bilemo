<?php

namespace App\Services\Doctrine;

use Ramsey\Uuid\Doctrine\UuidGenerator as BaseUuidGenerator;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\EntityManager;
use Ramsey\Uuid\UuidInterface;
use Ramsey\Uuid\Uuid;
use Exception;

/**
 * Class GeneratorUuid
 *
 * @package App\Services\Doctrine
 */
class GeneratorUuid extends BaseUuidGenerator
{
    /**
     * @param EntityManager $em
     * @param Entity $entity
     * @return UuidInterface|string
     * @throws Exception
     */
    public function generate(EntityManager $em, $entity)
    {
        /** @var Uuid $uuid */
        $uuid = parent::generate($em, $entity);

        return $uuid;
    }
}