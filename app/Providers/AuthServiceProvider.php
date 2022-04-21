<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::resource('blogs', 'App\Policies\BlogPolicy');
        Gate::define('blog_category', 'App\Policies\BlogPolicy@category');
        Gate::define('blog_publish', 'App\Policies\BlogPolicy@publish');
        Gate::define('blog_tag', 'App\Policies\BlogPolicy@tag');

        Gate::resource('tours', 'App\Policies\TourPolicy');
        Gate::define('tour_publish', 'App\Policies\TourPolicy@publish');
        Gate::define('tour_guide', 'App\Policies\TourPolicy@tour_guide');

        Gate::resource('tourSpecials', 'App\Policies\SpecialTourPolicy');
        Gate::define('tourSpecial_publish', 'App\Policies\SpecialTourPolicy@publish');

        Gate::define('role', 'App\Policies\OthersPolicy@role');
        Gate::define('user', 'App\Policies\OthersPolicy@user');
        Gate::define('message', 'App\Policies\OthersPolicy@message');
        Gate::define('permission', 'App\Policies\OthersPolicy@permission');
    }
}
