<?php


namespace App\Factorio\Craftables;


use App\Factorio\Machines\AssemblingMachine3;
use App\Factorio\Machines\Machine;

class TransportBelt implements Craftable
{

    public function getName(): string
    {
        return 'Transport belt';
    }

    public function getIngredients(): array
    {
        return [
            new IronPlate(),
            new IronGearWheel(),
        ];
    }

    public function getItemsPerCraft(): int
    {
        return 2;
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