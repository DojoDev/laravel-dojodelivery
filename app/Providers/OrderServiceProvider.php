<?php

namespace DojoDelivery\Providers;

use Illuminate\Support\ServiceProvider;

class OrderServiceProvider extends ServiceProvider
{

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('DojoDelivery\Repositories\OrderRepository',
            'DojoDelivery\Repositories\OrderRepositoryEloquent'
        );
    }
}
