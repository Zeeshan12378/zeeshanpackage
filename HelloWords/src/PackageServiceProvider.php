<?php
namespace LaravelPackage\HelloWords;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load package routes
        $this->loadRoutesFrom(__DIR__.'/../routes.php');
    }

    public function register()
    {
        // Register package bindings
    }
}
