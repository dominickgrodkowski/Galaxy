<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class Main
{
    #[Route('/')]
    public function homepage(): Response
    {
        return new  Response('<strong>galaxyProject</strong>: yours truly galaxyProject in symfony');
    }
}
