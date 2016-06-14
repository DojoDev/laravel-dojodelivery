<?php

namespace DojoDelivery\Providers;

use Illuminate\Support\ServiceProvider;

class OrderItemServiceProvider extends ServiceProvider
{

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('DojoDelivery\Repositories\OrderItemRepository',
            'DojoDelivery\Repositories\OrderItemRepositoryEloquent'
        );
    }
}
