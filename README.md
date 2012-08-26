Événement Silex/Cilex Provider
==================


Dependency Injection provider for <a href="https://github.com/igorw/evenement">Événement</a> can be used in <a href="https://github.com/fabpot/Silex">Silex</a> and <a href="https://github.com/Cilex/Cilex">Cilex</a>.



### How to use in Silex:

```php
<?php

	$app->register(new Cobaia\Evenement\Provider\Silex\EvenementProvider());
	$app['evenement.emitter']->on('user.created', function (User $user) use ($logger) {
    	$logger->log(sprintf("User '%s' was created.", $user->getLogin()));
	});
```

### How to use in Cilex:


```php
<?php

	$app->register(new Cobaia\Evenement\Provider\Cilex\EvenementProvider());
	$app['evenement.emitter']->on('user.created', function (User $user) use ($logger) {
    	$logger->log(sprintf("User '%s' was created.", $user->getLogin()));
	});
```