<?php


namespace App\Factorio\Craftables;


use App\Factorio\Machines\AssemblingMachine3;
use App\Factorio\Machines\Machine;

class FirearmMagazine implements Craftable
{
    public function getName(): string
    {
        return 'Firearm magazine';
    }

    public function getIngredients(): array
    {
        return array_fill(0, 4, new IronPlate());
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
        return new AssemblingMachine3();
    }

    public function isIntermediate(): bool
    {
        return false;
    }
}