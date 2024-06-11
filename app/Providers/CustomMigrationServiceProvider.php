<?php

namespace App\Providers;

use App\CustomMigrator;
use Illuminate\Database\MigrationServiceProvider;

/**
 * The same as MigrationServiceProvider, but uses CustomerMigrator instead of Migrator
  */
class CustomMigrationServiceProvider extends MigrationServiceProvider
{
    protected function registerMigrator()
    {
        $this->app->singleton('migrator', function ($app) {
            $repository = $app['migration.repository'];

            // use own migrator
            return new CustomMigrator($repository, $app['db'], $app['files'], $app['events']);
        });
    }
}
