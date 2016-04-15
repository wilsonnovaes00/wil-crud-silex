<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


require_once __DIR__.'/../vendor/autoload.php';



$app = new Silex\Application(); 

$app['debug'] = true;

$app->get('/', function () use ($app) {

    return new Response(file_get_contents('../template/template.html'), 200);
});



$app->run();



