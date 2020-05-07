<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Turn;
use App\Observers\Observers;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use App\Http\Controllers\MyVoyagerBaseController;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(VoyagerBaseController::class, MyVoyagerBaseController::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Turn::observe(Observers::Class);
    }
}
