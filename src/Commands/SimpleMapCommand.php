<?php

namespace CodeWithDennis\SimpleMap\Commands;

use Illuminate\Console\Command;

class SimpleMapCommand extends Command
{
    public $signature = 'filament-simple-map';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
