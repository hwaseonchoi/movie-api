<?php

namespace App\Controller;

use App\Service\TmdbApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/movie")
 */
class MovieController extends AbstractController
{
    /**
     * @Route("/{id}", requirements={"id":"\d+"})
     */
    public function getDetails(int $id, TmdbApiService $tmdbApiService)
    {
        $tmdbApiService->search(['entry_point' => 'movie/'.$id]);
    }
}
