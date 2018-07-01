<?php

namespace SPie\GoogleServiceProvider\Providers;

use Illuminate\Support\ServiceProvider;
use SPie\LaravelGoogleClient\Exception\GoogleServiceException;

/**
 * Class GoogleServiceProvider
 *
 * @package SPie\GoogleServiceProvider\Providers
 */
abstract class GoogleServiceProvider extends ServiceProvider
{

    //region Register services

    /**
     * @return $this
     */
    public function register()
    {
        return $this
            ->mergeConfig()
            ->registerGoogleClient()
            ->registerGoogleServices();
    }

    /**
     * Merge config
     *
     * @return $this
     */
    protected function mergeConfig()
    {
        $this->mergeConfigFrom(
            $this->getConfigPath(), 'google'
        );

        return $this;
    }

    /**
     * @return string
     */
    protected function getConfigPath(): string
    {
        return __DIR__ . '/../../config/google.php';
    }

    /**
     * @return $this
     */
    protected function registerGoogleClient()
    {
        $this->app->bind(\Google_Client::class, function () {
            return new \Google_Client($this->app['config']['google.client']);
        });

        return $this;
    }

    /**
     * @return $this
     */
    protected function registerGoogleServices()
    {
        $servicesClasses = $this->app['config']['google.services'];
        if (!\is_array($servicesClasses) || empty($servicesClasses)) {
            return $this;
        }

        foreach ($servicesClasses as $serviceClass) {
            if (!\class_exists($serviceClass)) {
                continue;
            }

            $this->app->bind($serviceClass, function () use ($serviceClass) {
                $service = new $serviceClass($this->app->get(\Google_Client::class));

                if (!($service instanceof \Google_Service)) {
                    throw new GoogleServiceException(
                        $serviceClass . ' is no instance of ' . \Google_Service::class
                    );
                }

                return $service;
            });
        }

        return $this;
    }

    //endregion

    //region Boot services

    /**
     * @return $this
     */
    public function boot()
    {
        return $this->publishConfigPath();
    }

    /**
     * @return $this
     */
    protected function publishConfigPath()
    {
        //not needed for lumen

        return $this;
    }

    //endregion
}