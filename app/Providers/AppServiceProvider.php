<?php

namespace App\Providers;

use App\Helpers\RoleHelper;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
        Gate::define('admin', fn(User $user) => RoleHelper::getAuthRole() === 'admin');
        Gate::define('organizer', fn(User $user) => RoleHelper::getAuthRole() === 'organizer');
        Gate::define('client', fn(User $user) => RoleHelper::getAuthRole() === 'client');
    }
}
