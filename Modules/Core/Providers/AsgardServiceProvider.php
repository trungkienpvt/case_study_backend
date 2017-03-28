<?php namespace Modules\Core\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;


class AsgardServiceProvider extends ServiceProvider
{
    public function register()
    {


        $loader = AliasLoader::getInstance();
        $loader->alias('Module', Module::class);
    }
}
