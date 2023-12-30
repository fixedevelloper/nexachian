<?php

namespace App\Console\Commands;

use App\Models\Lottory;
use Illuminate\Console\Command;

class MakeWinner extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:make-winner';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $arrays = [];
        $lottos = Lottory::all();
        foreach ($lottos as $lotto) {
            $vals = json_decode($lotto->numbers, true);
            if (is_array($vals)) {
                for ($i = 0; $i < sizeof($vals); $i++) {
                    $arrays[] = $vals[$i];
                }
            }

        }
        logger($arrays);
    }
}
