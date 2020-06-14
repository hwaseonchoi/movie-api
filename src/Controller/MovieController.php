<?php

namespace App\Controller;

use App\Service\TmdbApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/movie")
 */
class MovieController extends AbstractController
{
    /**
     * @Route("/{id}", requirements={"id":"\d+"}, methods={"GET"})
     *
     * @param int $id
     * @param TmdbApiService $tmdbApiService
     *
     * @return JsonResponse
     */
    public function getDetails(int $id, TmdbApiService $tmdbApiService)
    {
        return new JsonResponse($tmdbApiService->getData(['entry_point' => 'movie/'.$id]));
    }
}
