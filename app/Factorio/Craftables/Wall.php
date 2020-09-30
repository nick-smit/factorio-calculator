<?php


namespace App\Factorio\Craftables;


use App\Factorio\Machines\AssemblingMachine3;
use App\Factorio\Machines\Machine;

class Wall implements Craftable
{
    public function getName(): string
    {
        return 'Wall';
    }

    public function getIngredients(): array
    {
        return array_fill(0,5, new StoneBrick());
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