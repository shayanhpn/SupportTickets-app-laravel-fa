<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Policies\SeeOwnDetail;
use App\Policies\UserPolicy;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        User::class => UserPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('update-user', function (User $user) {
            return $user->id === Auth::user()->id;
        });
    }
}
