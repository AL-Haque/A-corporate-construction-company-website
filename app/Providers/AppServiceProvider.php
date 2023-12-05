<?php

namespace App\Providers;

use App\Models\Company;
use App\Models\Map;
use App\Models\Photo;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $info = Company::first();
        view()->share('info', $info);

        $map =Map::first();
        view()->share('map', $map);

        $photo =Photo::all()->take(5);
        view()->share('photo', $photo);
    }
}
