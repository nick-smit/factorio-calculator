<?php


namespace App\Factorio\Craftables;


use App\Factorio\Machines\AssemblingMachine3;
use App\Factorio\Machines\Machine;

class AutomationSciencePack implements Craftable
{

    public function getName(): string
    {
        return 'Automation science pack';
    }

    public function getIngredients(): array
    {
        return [
            new CopperPlate(),
            new IronGearWheel(),
        ];
    }

    public function getItemsPerCraft(): int
    {
        return 1;
    }

    public function getCraftingTime(): float
    {
        return 5;
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