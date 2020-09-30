<?php


namespace App\Factorio\Craftables;


use App\Factorio\Machines\ElectricMiningDrill;
use App\Factorio\Machines\Machine;

class CopperOre implements Craftable
{

    public function getName(): string
    {
        return 'Copper ore';
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
        // @todo implement crafting time based on mining productivity
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