<?php

namespace App\Repository;

use App\Model\Starship;
use Psr\Log\LoggerInterface;

class StarshipRepository
{
    public function __construct(private LoggerInterface $logger)
    {
        $this->logger->info('Fetching starships from the database');
    }
    public function findAll(): array
    {
        return [
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
    }

    public function find(int $id): ?Starship
    {
        foreach ($this->findAll() as $starship) {
            if ($starship->getId() === $id) {
                return $starship;
            }
        }
        return null;
    }
}
