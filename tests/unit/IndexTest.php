<?php
//
use Slim\Container;
use Slim\DeferredCallable;
use Slim\Http\Body;
use Slim\Http\Environment;
use Slim\Http\Headers;
use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Http\Uri;
use Slim\Route;
use Slim\Tests\Mocks\CallableTest;
use Slim\Tests\Mocks\InvocationStrategyTest;
use Slim\Tests\Mocks\MiddlewareStub;

class RouteTest extends \PHPUnit_Framework_TestCase
{
    public function testInvokeWhenReturningAResponse()
    {
      $action = new EchoAction();
      $environment = \Slim\Http\Environment::mock([
          'REQUEST_METHOD' => 'GET',
          'REQUEST_URI' => '/echo',
          'QUERY_STRING'=>'foo=bar']
      );
      $request = \Slim\Http\Request::createFromEnvironment($environment);
      $response = new \Slim\Http\Response();
      $response = $action($request, $response, []);
      $this->assertSame((string)$response->getBody(), json_encode(['key' => 'value']));
    }
 }
?>
