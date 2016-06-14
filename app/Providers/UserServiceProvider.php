<?php

namespace DojoDelivery\Providers;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{


    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('DojoDelivery\Repositories\UserRepository',
            'DojoDelivery\Repositories\UserRepositoryEloquent'
        );
    }
}
