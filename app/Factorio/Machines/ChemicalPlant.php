<?php


namespace App\Factorio\Machines;


class ChemicalPlant implements Machine
{

    public function getName(): string
    {
        return 'Chemical plant';
    }

    public function getCraftingSpeed(): float
    {
        return 4.55;
    }

    public function getProductivity(): float
    {
        return 1.3;
    }
}