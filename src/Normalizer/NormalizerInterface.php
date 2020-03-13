<?php

namespace App\Normalizer;

use Exception;

/**
 * Interface NormalizerInterface
 *
 * @package App\Normalizer
 */
interface NormalizerInterface
{
    /**
     * @param Exception $exception
     *
     * @return mixed
     */
    public function normalize(Exception $exception);

    /**
     * @param Exception $exception
     *
     * @return mixed
     */
    public function supports(Exception $exception);
}