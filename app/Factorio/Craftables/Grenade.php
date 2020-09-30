<?php


namespace App\Factorio\Craftables;


use App\Factorio\Machines\AssemblingMachine3;
use App\Factorio\Machines\Machine;

class Grenade implements Craftable
{

    public function getName(): string
    {
        return 'Grenade';
    }

    public function getIngredients(): array
    {
        return array_merge(
            array_fill(0, 10, new Coal()),
            array_fill(0,5, new IronPlate()),
        );
    }

    public function getItemsPerCraft(): int
    {
        return 1;
    }

    public function getCraftingTime(): float
    {
        return 8;
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