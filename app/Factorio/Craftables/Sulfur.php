<?php


namespace App\Factorio\Craftables;


use App\Factorio\Machines\ChemicalPlant;
use App\Factorio\Machines\Machine;

class Sulfur implements Craftable
{
    public function getName(): string
    {
        return 'Sulfur';
    }

    public function getIngredients(): array
    {
        return array_merge(
            array_fill(0, 30, new Water()),
//            array_fill(0, 30, new PetroleumGas())
        );
    }

    public function getItemsPerCraft(): int
    {
        return 2;
    }

    public function getCraftingTime(): float
    {
        return 1;
    }

    public function getMachine(): Machine
    {
        return new ChemicalPlant();
    }

    public function isIntermediate(): bool
    {
        return true;
    }
}