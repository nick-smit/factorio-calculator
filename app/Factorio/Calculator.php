<?php


namespace App\Factorio;


use App\Factorio\Craftables\Craftable;

class Calculator
{
    public function calculate(Craftable $craftable, float $itemsPerSecond): array
    {
        $craftsPerSecondPerMachine = $craftable->getItemsPerCraft() / $craftable->getCraftingTime() * $craftable->getMachine()->getCraftingSpeed();

        $productivity = 1;
        if ($craftable->isIntermediate()) {
            $productivity = $craftable->getMachine()->getProductivity();
        }
        $necessaryMachines = $itemsPerSecond / ($craftsPerSecondPerMachine * $productivity);

        $output = [$craftable->getName() => $necessaryMachines];

        foreach ($craftable->getIngredients() as $ingredient) {
            $ingredientOutput = $this->calculate($ingredient, $necessaryMachines * $craftsPerSecondPerMachine);

            foreach ($ingredientOutput as $ingredientName => $ingredientMachines) {
                if (isset($output[$ingredientName])) {
                    $output[$ingredientName] += $ingredientMachines;
                } else {
                    $output[$ingredientName] = $ingredientMachines;
                }
            }
        }

        return $output;
    }
}