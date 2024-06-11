<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CommonServiceProvider extends ServiceProvider
{
    public function register()
    {
        // here the registration of different custom services
        $this->app->register(CustomMigrationServiceProvider::class);
       // ...
    }
}
