<?php

namespace App\Services\Generator;

use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * Class UrlGenerator
 *
 * @package App\Services\Generator
 */
class UrlGenerator
{
    /**
     * @var UrlGeneratorInterface
     */
    protected $urlGenerator;

    /**
     * PaginatorFactory constructor.
     *
     * @param UrlGeneratorInterface $urlGenerator
     */
    public function __construct(UrlGeneratorInterface $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    /**
     * @param $route
     * @param $pages
     * @param $page
     * @param $limit
     *
     * @return array
     */
    public function generateNext($route, $pages, $page, $limit) : array
    {
        if ($page < $pages) {
            return [$this->urlGenerator->generate($route, ["page" => $page + 1, "limit" => $limit])];
        } else {
            $data = [];
        }
        return $data;
    }

    /**
     * @param $route
     * @param $page
     * @param $limit
     *
     * @return array|string
     */
    public function generatePrevious($route, $page, $limit) : array
    {
        if ($page > 1) {
            return [$this->urlGenerator->generate($route, ["page" => $page - 1, "limit" => $limit])];
        } else {
            $data = [];
        }
        return $data;
    }

    /**
     * @param $route
     * @param $page
     * @param $limit
     *
     * @return array
     */
    public function generateFirst($route, $page, $limit) : array
    {
        if ($page > 1) {
            return [ $this->urlGenerator->generate($route, ["page" => 1, "limit" => $limit])];
        } else {
            $data = [];
        }
        return $data;
    }

    /**
     * @param $route
     * @param $page
     * @param $pages
     * @param $limit
     *
     * @return array
     */
    public function generateLast($route, $pages, $page, $limit) : array
    {
        if ($page < $pages) {
            return [$this->urlGenerator->generate($route, ["page" => $pages, "limit" => $limit])];
        } else {
            $data = [];
        }
        return $data;
    }
}
