<?php

namespace Bavix\Providers;

use Bavix\Middleware\IfIndex;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Http\Kernel;

class IfIndexProvider extends ServiceProvider
{

    public function boot()
    {
        $this->registerMiddleware(IfIndex::class);
    }


    /**
     * Register the Debugbar Middleware
     *
     * @param  string $middleware
     */
    protected function registerMiddleware($middleware)
    {
        $kernel = $this->app[Kernel::class];
        $kernel->pushMiddleware($middleware);
    }

}
