<?php

namespace App\Console\Commands;

use App\Factorio\Calculator;
use App\Factorio\Craftables\AutomationSciencePack;
use App\Factorio\Craftables\ChemicalSciencePack;
use App\Factorio\Craftables\ElectronicCircuit;
use App\Factorio\Craftables\IronGearWheel;
use App\Factorio\Craftables\IronOre;
use App\Factorio\Craftables\IronPlate;
use App\Factorio\Craftables\LogisticSciencePack;
use App\Factorio\Craftables\MilitarySciencePack;
use Illuminate\Console\Command;

class CalculateFactory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calculate:factory';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(Calculator $calculator)
    {
        $pieces = [];
        $pieces[] = $calculator->calculate(new AutomationSciencePack(), 200 / 60);
        $pieces[] = $calculator->calculate(new LogisticSciencePack(), 200 / 60);
        $pieces[] = $calculator->calculate(new MilitarySciencePack(), 200 / 60);
        $pieces[] = $calculator->calculate(new ChemicalSciencePack(), 200 / 60);

        $output = [];
        foreach ($pieces as $piece) {
            foreach ($piece as $item => $machines) {
                if (isset($output[$item])) {
                    $output[$item] += $machines;
                } else {
                    $output[$item] = $machines;
                }
            }
        }

        foreach ($output as $item => $machines) {
            $output[$item] = ceil($machines);
        }

        dump($output);

        return 0;
    }
}
