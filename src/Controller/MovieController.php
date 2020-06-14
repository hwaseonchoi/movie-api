<?php

namespace App\Controller;

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
    public function getDetails(int $id)
    {
        // send id to the service
    }
}
