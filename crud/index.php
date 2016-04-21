<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


require_once __DIR__.'/../vendor/autoload.php';


$app = new Silex\Application();
$app->get('/', function () use ($app) {

    return new Response(file_get_contents('../template/template.php'), 200);
});


$app->run();



