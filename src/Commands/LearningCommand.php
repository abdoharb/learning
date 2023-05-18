<?php

namespace MrHarb\Learning\Commands;

use Illuminate\Console\Command;

class LearningCommand extends Command
{
    public $signature = 'learning';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
