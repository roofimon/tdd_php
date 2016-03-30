<?php
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class EchoAction
{
  public function __invoke(Request $request, Response $response, $args = [])
  {
    return $response->write('{"key":"value"}');
  }
}
?>
