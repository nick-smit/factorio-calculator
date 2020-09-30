<?php


namespace App\Factorio\Machines;


class AssemblingMachine3 implements Machine
{
    public function getName(): string
    {
        return 'Assembling machine 3';
    }

    public function getCraftingSpeed(): float
    {
        return 5.5;
    }

    public function getProductivity(): float
    {
        return 1.4;
    }
}