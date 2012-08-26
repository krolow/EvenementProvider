<?php
namespace Cobaia\Evenement\Provider\Silex;

use Silex\Application;
use Silex\ServiceProviderInterface;

class EvenementProvider implements ServiceProviderInterface
{
    
    public function register(Application $app)
    {
        $app['evenement.emitter'] = $app->share(function () use ($app) {
            return new \Evenement\EventEmitter();
        });
    }

    public function boot(Application $app)
    {

    }

}