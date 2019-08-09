<?php

namespace HalloWorld\Providers;


use Plenty\Plugin\ServiceProvider;

class HalloWorldServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     */

    public function register()
    {
        $this->getApplication()->register(HalloWorldRouteServiceProvider::class);
    }
}
