<?php


namespace App\Factorio\Craftables;


use App\Factorio\Machines\AssemblingMachine3;
use App\Factorio\Machines\Machine;

class ChemicalSciencePack implements Craftable
{

    public function getName(): string
    {
        return 'Chemical science pack';
    }

    public function getIngredients(): array
    {
        return array_merge(
            [new Sulfur()],
//            array_fill(0, 3, new AdvancedCircuit()),
//            array_fill(0, 2, new EngineUnit())
        );
    }

    public function getItemsPerCraft(): int
    {
        return 2;
    }

    public function getCraftingTime(): float
    {
        return 24;
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