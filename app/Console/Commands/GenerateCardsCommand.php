<?php

namespace App\Console\Commands;

use App\Services\Cards;
use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Spatie\Browsershot\Browsershot;

class GenerateCardsCommand extends Command
{
    protected $signature = 'generate-cards';

    public function handle()
    {
        collect(Cards::getAll())->each(function(array $card) {
            $this->comment("Generating card for {$card['speaker_name']}...");

            $slug = Str::slug("{$card['type']} {$card['speaker_name']}");

            $elementId = "#card-{$slug}";

            Browsershot::url('http://cards-generator.test/')
                ->select($elementId)
                ->deviceScaleFactor(2)
                ->windowSize(2000, 2000)
                ->save(storage_path("app/cards/{$slug}.jpg"));
        });

        $this->info('All done!');
    }
}
