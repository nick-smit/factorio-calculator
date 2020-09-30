<?php


namespace App\Factorio\Craftables;


use App\Factorio\Machines\AssemblingMachine3;
use App\Factorio\Machines\Machine;

class IronGearWheel implements Craftable
{

    public function getName(): string
    {
        return 'Iron gear wheel';
    }

    public function getIngredients(): array
    {
        return array_fill(0, 2, new IronPlate());
    }

    public function getItemsPerCraft(): int
    {
        return 1;
    }

    public function getCraftingTime(): float
    {
        return 0.5;
    }

    public function getMachine(): Machine
    {
        return new AssemblingMachine3();
    }

    public function isIntermediate(): bool
    {
        return true;
    }
}