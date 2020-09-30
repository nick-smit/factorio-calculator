<?php


namespace App\Factorio\Craftables;


use App\Factorio\Machines\AssemblingMachine3;
use App\Factorio\Machines\Machine;

class Inserter implements Craftable
{

    public function getName(): string
    {
        return 'Inserter';
    }

    public function getIngredients(): array
    {
        return [
            new IronPlate(),
            new IronGearWheel(),
            new ElectronicCircuit(),
        ];
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
        return false;
    }
}