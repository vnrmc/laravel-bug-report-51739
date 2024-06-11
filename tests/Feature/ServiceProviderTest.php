<?php

namespace Tests\Feature;

use App\CustomMigrator;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ServiceProviderTest extends TestCase
{
    use RefreshDatabase;

    public function testServiceProvider(): void
    {
        // works with laravel/framework 11.8
        // does not work with laravel/framework 11.9+
       self::assertInstanceOf(CustomMigrator::class, $this->app->get('migrator'));
    }
}
