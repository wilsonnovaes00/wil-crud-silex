<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

#Add Autoload
require_once __DIR__.'/../vendor/autoload.php';


#Starting Silex Application
$app = new Silex\Application();


#Debugging
$app['debug'] = true;


#Registering a Twig Provider
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../template',
));


#Routes
$app->get('/', function () use ($app) {

    return $app['twig']->render('hello.twig');
});


$app->run();



