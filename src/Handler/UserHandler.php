<?php

namespace App\Handler;

use Doctrine\ORM\EntityManagerInterface;

/**
 * Class UserHandler
 *
 * @package App\Handler
 */
class UserHandler
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * UserHandler constructor.
     *
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @inheritDoc
     */
    public function process($data = null): void
    {
        $this->entityManager->persist($data);
        $this->entityManager->flush();

    }
}