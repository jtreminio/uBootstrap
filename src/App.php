<?php

require __DIR__ . '/Container.php';

$container = new Container;

$app = $container->getApp();

$env = getenv('APP_ENV') ?: 'prod';

$app->register(new Igorw\Silex\ConfigServiceProvider(__DIR__ . "/../config/{$env}.yml"));
