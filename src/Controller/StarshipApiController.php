<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarshipApiController extends AbstractController
{
    #[Route('/api/starships')]
public function getCollection(): Response
{
    $starships = [
        [
            'name' => 'Millennium Falcon',
            'model' => 'YT-1300 light freighter',
            'manufacturer' => 'Corellian Engineering Corporation',
            'cost_in_credits' => '100000',
        ],
        [
            'name' => 'X-wing',
            'model' => 'T-65 X-wing',
            'manufacturer' => 'Incom Corporation',
            'cost_in_credits' => '149999',
        ],
        [
            'name' => 'Star Destroyer',
            'model' => 'Imperial I-class Star Destroyer',
            'manufacturer' => 'Kuat Drive Yards',
            'cost_in_credits' => '150000000',
        ],
    ];

    return $this->json($starships);
}
}}