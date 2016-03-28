<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

// Prepare the Pimple dependency injection container.
$container = new \Slim\Container();

// Add a Twig service to the container.
$container['captcha'] = function($container) {
  return new Captcha(2, 1, 1, 1);
};

// Create the Slim application using our container.
$app = new \Slim\App($container);

$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $captcha = $this->captcha;
    $left = $captcha->getLeftOperand();
    $response->getBody()->write("Hello, $left");
    return $response;
});

$app->run();
