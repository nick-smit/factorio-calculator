<?php


namespace App\Factorio\Craftables;


use App\Factorio\Machines\AssemblingMachine3;
use App\Factorio\Machines\Machine;

class LogisticSciencePack implements Craftable
{

    public function getName(): string
    {
        return 'Logistic science pack';
    }

    public function getIngredients(): array
    {
        return [
            new TransportBelt(),
            new Inserter(),
        ];
    }

    public function getItemsPerCraft(): int
    {
        return 1;
    }

    public function getCraftingTime(): float
    {
        return 6;
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