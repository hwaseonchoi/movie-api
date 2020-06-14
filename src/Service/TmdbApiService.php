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
     * @param array $criteria
     * @return HttpContract\ResponseInterface
     * @throws HttpContract\Exception\TransportExceptionInterface
     */
    public function search(array $criteria)
    {
        return $this->connector->get($criteria);
    }

    public function getData($criteria)
    {
        $response = $this->search($criteria);

        if (Response::HTTP_OK === $response->getStatusCode()) {
            $data = $response->getContent();
            $decodedData = json_decode($data);
            $movieDetails = new Movie();
            $movieDetails->setId($decodedData->id);
            $movieDetails->setImdbId($decodedData->imdb_id);
            $movieDetails->setTitle($decodedData->title);
            $movieDetails->setPosterPath($decodedData->poster_path);
            $movieDetails->setYear(substr($decodedData->release_date, 0,4));
            $movieDetails->setRating($decodedData->vote_average);
            $movieDetails->setRatingCount($decodedData->vote_count);

            return $movieDetails;
        }
    }
}
