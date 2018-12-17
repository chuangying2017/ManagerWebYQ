<?php

namespace App\Providers;

use App\Services\Permission\PermissionInterface;
use App\Services\Permission\PermissionOperation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PermissionInterface::class,PermissionOperation::class);
    }
}
