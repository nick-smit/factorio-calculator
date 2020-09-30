<?php


namespace App\Factorio\Craftables;


use App\Factorio\Machines\AssemblingMachine3;
use App\Factorio\Machines\Machine;

class PiercingRoundsMagazine implements Craftable
{

    public function getName(): string
    {
        return 'Piercing rounds magazine';
    }

    public function getIngredients(): array
    {
        return array_merge(
            array_fill(0,5, new CopperPlate()),
            [new SteelPlate(), new FirearmMagazine()]
        );
    }

    public function getItemsPerCraft(): int
    {
        return 1;
    }

    public function getCraftingTime(): float
    {
        return 4;
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