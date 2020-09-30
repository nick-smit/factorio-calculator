<?php


namespace App\Factorio\Craftables;


use App\Factorio\Machines\AssemblingMachine3;
use App\Factorio\Machines\Machine;

class ElectronicCircuit implements Craftable
{

    public function getName(): string
    {
        return 'Electronic circuit';
    }

    public function getIngredients(): array
    {
        return array_merge(
            [new IronPlate()],
            array_fill(0, 3, new CopperCable())
        );
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