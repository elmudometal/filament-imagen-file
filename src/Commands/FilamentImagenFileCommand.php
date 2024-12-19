<?php

namespace ElmudoDev\FilamentImagenFile\Commands;

use Illuminate\Console\Command;

class FilamentImagenFileCommand extends Command
{
    public $signature = 'filament-imagen-file';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
