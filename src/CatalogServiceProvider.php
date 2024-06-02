<?php

/*
 * This file is part of the Gufata Core package.
 *
 * (c) Gufata Team <dev@gufata.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gufata\Core;

use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider
{

    /**
     * Boot method of this service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

    /**
     * Register method of this service provider.
     *
     * @return void
     */
    public function register()
    {

    }


    /**
     * Get the services provided by the provider
     * @return void
     */
    public function provides()
    {

    }

}
