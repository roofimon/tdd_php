<?php
require_once __DIR__.'/../vendor/autoload.php';

$app = new \Slim\App;
$app->get('/', function(Request $request, Response $response) {
  $response->getBody()->write("Hello, $name");
  return $response;
});
//$app->get('/echo', EchoAction::class);
//var_dump($app);
$app->run();

?>
