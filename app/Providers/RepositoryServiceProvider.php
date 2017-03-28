<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\Modules\Products\Repositories\ProductRepository::class, \Modules\Products\Repositories\ProductRepositoryEloquent::class);
        $this->app->bind(\Modules\Page\Repositories\PageRepository::class, \Modules\Page\Repositories\PageRepositoryEloquent::class);
        $this->app->bind(\Modules\User\Repositories\UserRepository::class, \Modules\User\Repositories\UserRepositoryEloquent::class);
        //:end-bindings:
    }
}
