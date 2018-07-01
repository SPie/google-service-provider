<?php

namespace SPie\GoogleServiceProvider\Providers;

/**
 * Class LaravelGoogleServiceProvider
 *
 * @package SPie\GoogleServiceProvider\Providers
 */
class LaravelGoogleServiceProvider extends GoogleServiceProvider
{

    /**
     * @return $this
     */
    protected function publishConfigPath()
    {
        parent::publishConfigPath()
            ->publishes([$this->getConfigPath() => config_path('google.php')], 'config');

        return $this;
    }
}