<?php


namespace App\Factorio\Machines;


class ElectricFurnace implements Machine
{

    public function getName(): string
    {
        return 'Electric furnace';
    }

    public function getCraftingSpeed(): float
    {
        return 9.4;
    }

    public function getProductivity(): float
    {
        return 1.2;
    }
}