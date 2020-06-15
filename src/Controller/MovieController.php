<?php

namespace App\Controller;

use App\Service\TmdbApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/movies")
 */
class MovieController extends AbstractController
{
    /**
     * @Route(
     *     path="/{id}",
     *     requirements={"id":"\d+"},
     *     methods={"GET"},
     *     name="get_details"
     * )
     *
     * @param int $id
     * @param TmdbApiService $tmdbApiService
     *
     * @return JsonResponse
     *
     * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public function getDetails(int $id, TmdbApiService $tmdbApiService)
    {
        return new JsonResponse($tmdbApiService->getData(['entry_point' => 'movie/'.$id]));
    }
}
