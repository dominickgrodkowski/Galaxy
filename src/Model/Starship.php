<?php

namespace App\Model;

class Starship
{
public function __construct(
    private int $id,
    private string $name,
    private string $model,
    private string $manufacturer,
    private string $costInCredits,
)
{
{

}

}

    public function getName(): string
    {
        return $this->name;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getCostInCredits(): string
    {
        return $this->costInCredits;
    }

    public function getManufacturer(): string
    {
        return $this->manufacturer;
    }
}