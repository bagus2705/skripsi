<?php

namespace App\Providers;
use APP\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\URL; 


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
    public function boot(): void
    {
        Paginator::useBootstrap();

        Gate::define('admin', function (User $user) {
            return $user->role === 'admin';
        });

        Gate::define('filologis', function (User $user) {
            return $user->role === 'filologis';
        });

        Gate::define('pembaca', function (User $user) {
            return $user->role === 'pembaca';
        });

        if (config('app.env') != 'local') {
            URL::forceScheme('https');
        }
    }
}
