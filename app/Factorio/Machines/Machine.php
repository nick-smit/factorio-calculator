<?php


namespace App\Factorio\Machines;


interface Machine
{
    public function getName(): string;

    public function getCraftingSpeed(): float;

    public function getProductivity(): float;
}