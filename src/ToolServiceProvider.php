<?php

namespace Zareismail\Ceremony;
 
use Illuminate\Support\ServiceProvider; 
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Nova as LaravelNova; 

class ToolServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    { 
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations'); 
        $this->configurePolicies();

        LaravelNova::serving([$this, 'servingNova']);
    }

    /**
     * Configure the model policies.
     *  
     * @return void
     */
    public function configurePolicies()
    {
        Gate::policy(Ceremony::class, Policies\Ceremony::class);
        Gate::policy(Building::class, Policies\Building::class);
    }

    /**
     * Handles `servingNova` event.
     * 
     * @return void
     */
    public function servingNova()
    { 
        LaravelNova::resources([
            Nova\Ceremony::class,
            Nova\Building::class,
        ]);
    } 
}
