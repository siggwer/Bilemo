<?php

namespace App\Entity;

use App\Entity\Traits\IdTrait;
use Ramsey\Uuid\Uuid;
use Exception;

/**
 * Class AbstractEntity
 *
 * @package App\Entity
 */
abstract class AbstractEntity
{
    use IdTrait;

    /**
     * AbstractEntity constructor.
     *
     * @throws Exception
     */
    public function __construct()
    {
        $this->id = Uuid::uuid4()->toString();
    }
}
