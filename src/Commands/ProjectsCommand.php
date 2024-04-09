<?php

namespace AdminKit\Projects\Commands;

use Illuminate\Console\Command;

class ProjectsCommand extends Command
{
    public $signature = 'admin-kit-projects';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
