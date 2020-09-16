<?php

namespace Jlorente\DataMigrations\Console\Commands;

use Illuminate\Database\Console\Migrations\StatusCommand as BaseStatusCommand;
use Jlorente\DataMigrations\Console\Traits\DataMigrationCommandTrait;

class StatusCommand extends BaseStatusCommand
{
    use DataMigrationCommandTrait;

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'migrate-data:status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show the status of each data migration.';
}
