<?php


namespace App\Factorio\Craftables;


use App\Factorio\Machines\AssemblingMachine3;
use App\Factorio\Machines\Machine;

class MilitarySciencePack implements Craftable
{

    public function getName(): string
    {
        return 'Military science pack';
    }

    public function getIngredients(): array
    {
        return array_merge(
            [new PiercingRoundsMagazine(), new Grenade()],
            array_fill(0,2, new Wall())
        );
    }

    public function getItemsPerCraft(): int
    {
        return 2;
    }

    public function getCraftingTime(): float
    {
        return 10;
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