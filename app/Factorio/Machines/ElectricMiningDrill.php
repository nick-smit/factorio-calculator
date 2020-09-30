<?php


namespace App\Factorio\Machines;


class ElectricMiningDrill implements Machine
{

    public function getName(): string
    {
        return 'Electric mining drill';
    }

    public function getCraftingSpeed(): float
    {
        return 1;
    }

    public function getProductivity(): float
    {
        return 1;
    }
}