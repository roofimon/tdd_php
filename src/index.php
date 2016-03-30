<?php
require '../vendor/autoload.php';

$app = new \Slim\App;

$app->get('/echo', EchoAction::class);

$app->run();

?>
