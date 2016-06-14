<?php

namespace DojoDelivery\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {


       $this->app->bind('DojoDelivery\Repositories\CategoryRepository',
           'DojoDelivery\Repositories\CategoryRepositoryEloquent'
       );

        $this->app->bind('DojoDelivery\Repositories\ProductRepository',
            'DojoDelivery\Repositories\ProductRepositoryEloquent'
        );



    }
}

