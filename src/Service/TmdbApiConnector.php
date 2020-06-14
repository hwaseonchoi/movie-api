<?php

namespace App\Service;

use Symfony\Component\HttpClient\HttpClient;

class TmdbApiConnector
{
    protected $url;
    protected $client;

    public function __construct(string $url)
    {
        $this->url = $url;
        $this->client = HttpClient::create();
    }

    /**
     * @param string $method
     * @param string $criteria
     * @return \Symfony\Contracts\HttpClient\ResponseInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public function get(array $criteria)
    {
        return $this->client->request(
            'GET',
            str_replace('#entry_point#', $criteria['entry_point'],  $this->url)
        );
    }
}
