<?php


namespace App\Factorio\Craftables;


use App\Factorio\Machines\ElectricMiningDrill;
use App\Factorio\Machines\Machine;

class Stone implements Craftable
{
    public function getName(): string
    {
        return 'Stone';
    }

    public function getIngredients(): array
    {
        return [];
    }

    public function getItemsPerCraft(): int
    {
        return 1;
    }

    public function getCraftingTime(): float
    {
        return 1;
    }

    public function getMachine(): Machine
    {
        return new ElectricMiningDrill();
    }

    public function isIntermediate(): bool
    {
        return true;
    }
}