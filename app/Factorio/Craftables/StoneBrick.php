<?php


namespace App\Factorio\Craftables;


use App\Factorio\Machines\ElectricFurnace;
use App\Factorio\Machines\ElectricMiningDrill;
use App\Factorio\Machines\Machine;

class StoneBrick implements Craftable
{
    public function getName(): string
    {
        return 'Stone brick';
    }

    public function getIngredients(): array
    {
        return array_fill(0,2, new Stone());
    }

    public function getItemsPerCraft(): int
    {
        return 1;
    }

    public function getCraftingTime(): float
    {
        return 3.2;
    }

    public function getMachine(): Machine
    {
        return new ElectricFurnace();
    }

    public function isIntermediate(): bool
    {
        return true;
    }
}