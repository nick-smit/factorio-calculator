<?php


namespace App\Factorio\Craftables;


use App\Factorio\Machines\Machine;

interface Craftable
{
    public function getName(): string;

    /**
     * @return Craftable[]
     */
    public function getIngredients(): array;

    public function getItemsPerCraft(): int;

    public function getCraftingTime(): float;

    public function getMachine(): Machine;

    public function isIntermediate(): bool;
}