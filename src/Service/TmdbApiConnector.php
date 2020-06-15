<?php

namespace App\Service;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient as HttpContract;

class TmdbApiConnector
{
    /**
     * @var string
     */
    protected $url;

    /**
     * @var HttpContract\HttpClientInterface
     */
    protected $client;

    public function __construct(string $url)
    {
        $this->url = $url;
        $this->client = HttpClient::create();
    }

    /**
     * @param array $criteria
     *
     * @return HttpContract\ResponseInterface
     * @throws HttpContract\Exception\TransportExceptionInterface
     */
    public function get(array $criteria): HttpContract\ResponseInterface
    {
        return $this->client->request(
            'GET',
            str_replace('#entry_point#', $criteria['entry_point'],  $this->url)
        );
    }
}
