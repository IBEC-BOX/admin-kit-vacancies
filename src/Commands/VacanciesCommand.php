<?php

namespace AdminKit\Vacancies\Commands;

use Illuminate\Console\Command;

class VacanciesCommand extends Command
{
    public $signature = 'admin-kit-vacancies';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
