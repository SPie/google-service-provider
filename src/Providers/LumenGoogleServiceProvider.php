<?php

namespace SPie\GoogleServiceProvider\Providers;

/**
 * Class LumenGoogleServiceProvider
 *
 * @package SPie\GoogleServiceProvider\Providers
 */
class LumenGoogleServiceProvider extends GoogleServiceProvider
{

    /**
     * @return $this
     */
    protected function mergeConfig()
    {
        $this->app->configure('google');

        return parent::mergeConfig();
    }
}