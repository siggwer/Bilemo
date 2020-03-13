<?php

namespace App\Normalizer;

use Symfony\Component\HttpFoundation\Response;
use Exception;

/**
 * Class BandRequestHttpExceptionNormalizer
 *
 * @package App\Normalizer
 */
class BandRequestHttpExceptionNormalizer extends AbstractNormalizer
{
    /**
     * @param Exception $exception
     *
     * @return mixed
     */
    public function normalize(Exception $exception)
    {
        $result['code'] = Response::HTTP_NOT_FOUND;

        $result['body'] = [
            'code' => Response::HTTP_NOT_FOUND,
            'message' => $exception->getMessage()
        ];

        return $result;
    }
}
