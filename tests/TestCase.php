<?php

namespace Nanopkg\LaravelSettings\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Nanopkg\LaravelSettings\LaravelSettingsServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Nanopkg\\LaravelSettings\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelSettingsServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        include_once __DIR__.'/../database/migrations/create_laravel-settings_table.php.stub';
        (new \CreatePackageTable())->up();
        */
    }
}
