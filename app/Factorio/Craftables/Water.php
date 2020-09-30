<?php


namespace App\Factorio\Craftables;


use App\Factorio\Machines\Machine;
use App\Factorio\Machines\OffshorePump;

class Water implements Craftable
{

    public function getName(): string
    {
        return 'Water';
    }

    public function getIngredients(): array
    {
        return [];
    }

    public function getItemsPerCraft(): int
    {
        return 1200;
    }

    public function getCraftingTime(): float
    {
        return 1;
    }

    public function getMachine(): Machine
    {
        return new OffshorePump();
    }

    public function isIntermediate(): bool
    {
        return false;
    }
}