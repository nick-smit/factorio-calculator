<?php


namespace App\Factorio\Machines;


class OffshorePump implements Machine
{

    public function getName(): string
    {
        return 'Offshore pump';
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