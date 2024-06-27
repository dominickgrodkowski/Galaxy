<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Model\Starship;

class StarshipApiController extends AbstractController
{
    #[Route('/api/starships')]
    public function getCollection(): Response
    {
        $starships = [
            new Starship(
                1,
                'Millennium Falcon',
                'YT-1300 light freighter',
                'Corellian Engineering Corporation',
                '100000'
            ),
            new Starship(
                2,
                'X-wing',
                'T-65 X-wing',
                'Incom Corporation',
                '149999'
            ),
            new Starship(
                3,
                'Star Destroyer',
                'Imperial I-class Star Destroyer',
                'Kuat Drive Yards',
                '150000000'
            ),
        ];

        return $this->json($starships);
    }
}