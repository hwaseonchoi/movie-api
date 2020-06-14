<?php

namespace App\Service;

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

    public function serializeData($criteria)
    {
        $response = $this->search($criteria);

        if (Response::HTTP_OK === $response->getStatusCode()) {
            $data = $response->getContent();
        }
    }
}
