<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        $starshipCount = 5;

        $myShip = [
            'name' => 'Millennium Falcon',
            'model' => 'YT-1300 light freighter',
            'manufacturer' => 'Corellian Engineering Corporation',
            'cost_in_credits' => '100000',
        ];







        return $this->render('main/homepage.html.twig', [
            'numberOfStarships' => $starshipCount,
            'myShip' => $myShip,
        ]);
    }
}
