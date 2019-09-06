<?php

namespace App\Console\Commands;

use App\Services\Cards;
use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Spatie\Browsershot\Browsershot;

class GenerateCards extends Command
{
    protected $signature = 'generate-cards';

    public function handle()
    {
        collect(Cards::getAll())->each(function(array $cardProperties) {
            $this->comment("Generating card for {$cardProperties['teacher_name']}...");

            $elementId = '#card-' . Str::slug($cardProperties['teacher_name']);

            Browsershot::url('http://workshop-cards.test/')
                ->select($elementId)
                ->deviceScaleFactor(2)
                ->windowSize(1000, 1000)
                ->save(storage_path('app/cards/' . Str::slug($cardProperties['teacher_name']) . '.jpg'));
        });

        $this->info('All done!');
    }
}
