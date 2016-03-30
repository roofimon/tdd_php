<?php
require_once __DIR__.'/../vendor/autoload.php';

$container = new \Slim\Container;

$app = new \Slim\App($container);

$app->get('/foo', function ($req, $res) {
    return $res->write("Halt");
});

?>
