<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(){
        View::composer('admin.sidebar', function ($view) {
            $tables = DB::select('SHOW TABLES');
            $tables_name = [];
            foreach ($tables as $table) {
                foreach ($table as $key => $value) {
                    $tables_name[] = $value;
                }
            }
            $view->with('tables_name', $tables_name);
        });
    }
}
