<?php namespace Modules\User\Providers;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * @var array
     */
    protected $providers = [
//        'Sentinel' => 'Cartalyst\\Sentinel\\Laravel\\SentinelServiceProvider',
//        'Sentry'   => 'Cartalyst\\Sentry\\SentryServiceProvider',
//        'Usher'    => 'Maatwebsite\\Usher\\UsherServiceProvider'
    ];

    /**
     * @var array
     */
    protected $middleware = [
        'User' => [
            'auth.guest' => 'GuestMiddleware',
            'logged.in' => 'LoggedInMiddleware'
        ],
    ];

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
//        $this->app->register(
//            $this->getUserPackageServiceProvider()
//        );

        $this->registerBindings();
    }

    /**
     */
    public function boot()
    {
        $this->registerMiddleware($this->app['router']);

        $viewPath = base_path('resources/views/modules/user');

        $sourcePath = __DIR__.'/../Resources/views';

        $this->publishes([
            $sourcePath => $viewPath
        ]);

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/user';
        }, \Config::get('view.paths')), [$sourcePath]), 'user');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

    private function registerBindings()
    {
//        $driver = config('user.users.driver', 'Sentinel');
//
//        $this->app->bind(
//            'Modules\User\Repositories\UserRepository',
//            "Modules\\User\\Repositories\\{$driver}\\{$driver}UserRepository"
//        );
//
        $this->app->bind(
            'Modules\User\Repositories\RoleRepository',
            "Modules\\User\\Repositories\\RoleRepository"
        );
//        $this->app->bind(
//            'Modules\Core\Contracts\Authentication',
//            "Modules\\User\\Repositories\\{$driver}\\{$driver}Authentication"
//        );
        $this->app->bind(\Modules\User\Repositories\RoleRepository::class,
            \Modules\User\Repositories\RoleRepositoryEloquent::class);
    }

    private function registerMiddleware($router)
    {
        foreach ($this->middleware as $module => $middlewares) {
            foreach ($middlewares as $name => $middleware) {
                $class = "Modules\\{$module}\\Http\\Middleware\\{$middleware}";

                $router->middleware($name, $class);
            }
        }
    }

    private function getUserPackageServiceProvider()
    {
//        $driver = config('user.users.driver', 'Sentinel');
//
//        if (!isset($this->providers[$driver])) {
//            throw new \Exception("Driver [{$driver}] does not exist");
//        }
//
//        return $this->providers[$driver];
    }
}
