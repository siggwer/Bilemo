<?php

namespace App\Services\Paginator;

use Doctrine\ORM\Tools\Pagination\Paginator;
use App\Services\Generator\UrlGenerator;
use Exception;

/**
 * Class PaginatorFactory
 *
 * @package App\Paginator
 */
class PaginatorFactory
{
    /**
     * @var UrlGenerator
     */
    protected $generator;

    /**
     * PaginatorFactory constructor.
     *
     * @param UrlGenerator $generator
     */
    public function __construct(UrlGenerator $generator)
    {
        $this->generator = $generator;
    }

    /**
     * @param string    $route
     * @param Paginator $doctrinePaginator
     * @param int       $page
     * @param int       $limit
     *
     * @return array
     *
     * @throws Exception
     */
    public function getData(
        string $route,
        Paginator $doctrinePaginator,
        int $page,
        int $limit
    ) {
        $total = $doctrinePaginator->count();

        $items = $doctrinePaginator->getIterator();

        $pages = ceil($total / $limit);

        $next = $this->generator->generateNext($route, $pages, $page, $limit);

        $previous = $this->generator->generatePrevious($route, $page, $limit);

        $first = $this->generator->generateFirst($route, $page, $limit);

        $last = $this->generator->generateLast($route, $pages, $page, $limit);

        return [
            "page" => $page,
            "pages" => $pages,
            "total" => $total,
            "limit" => $limit,
            "_links" => [
                "next" => $next,
                "previous" => $previous,
                "first" => $first,
                "last" => $last
            ],
            "_embedded" => [
                "items" => $items
            ]
        ];
    }
}
