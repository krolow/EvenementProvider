<?php
namespace Cobaia\Evenement\Provider\Cilex;

use Cilex\Application;
use Cilex\ServiceProviderInterface;

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