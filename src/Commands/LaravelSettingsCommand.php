<?php

namespace Nanopkg\LaravelSettings\Commands;

use Illuminate\Console\Command;

class LaravelSettingsCommand extends Command
{
    public $signature = 'laravel-settings';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
