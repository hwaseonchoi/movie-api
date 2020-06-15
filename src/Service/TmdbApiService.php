<?php

namespace App\Service;

use App\Model\Movie;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\HttpClient as HttpContract;

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

    /**
     * Manage the response from the tmdb API
     *
     * @param $criteria
     * @return Movie|null
     *
     * @throws HttpContract\Exception\ClientExceptionInterface
     * @throws HttpContract\Exception\RedirectionExceptionInterface
     * @throws HttpContract\Exception\ServerExceptionInterface
     * @throws HttpContract\Exception\TransportExceptionInterface
     */
    public function getData($criteria): ?Movie
    {
        $response = $this->connector->get($criteria);

        if (Response::HTTP_OK === $response->getStatusCode()) {
            $data = $response->getContent();
            $decodedData = json_decode($data);

            return Movie::create($decodedData);
        }

        // Would be better to implement in order to catch and handle different response from TMDB API

        return null;
    }
}
