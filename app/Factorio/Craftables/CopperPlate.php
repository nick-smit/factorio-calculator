<?php


namespace App\Factorio\Craftables;


use App\Factorio\Machines\ElectricFurnace;
use App\Factorio\Machines\Machine;

class CopperPlate implements Craftable
{

    public function getName(): string
    {
        return 'Copper plate';
    }

    public function getIngredients(): array
    {
        return [new CopperOre()];
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