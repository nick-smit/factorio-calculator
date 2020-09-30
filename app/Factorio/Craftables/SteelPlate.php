<?php


namespace App\Factorio\Craftables;


use App\Factorio\Machines\ElectricFurnace;
use App\Factorio\Machines\Machine;

class SteelPlate implements Craftable
{

    public function getName(): string
    {
        return 'Steel plate';
    }

    public function getIngredients(): array
    {
        return array_fill(0, 5, new IronPlate());
    }

    public function getItemsPerCraft(): int
    {
        return 1;
    }

    public function getCraftingTime(): float
    {
        return 16;
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