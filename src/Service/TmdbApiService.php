<?php

namespace App\Service;

class TmdbApiService
{
    /**
     * @var TmdbApiConnector
     */
    public $connector;

    public function __construct(TmdbApiConnector $connector)
    {
        $this->connector = $connector;
    }

    public function search(array $criteria)
    {
        return $this->connector->get($criteria);
    }
}
