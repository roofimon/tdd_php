<?php
use \Slim\Http\Environment;
class RoutingFunctionalTest extends \PHPUnit_Framework_TestCase
{
  public function testRouteFoo()
  {
    require __DIR__.'/../../src/routing.php';
    $container['environment'] = function () {
        return Environment::mock([
            'REQUEST_URI' => '/foo',
            'REQUEST_METHOD' => 'GET'
        ]);
    };
    $app->set['container'] = $container;
    ob_start();
    $app->run();
    $output = ob_get_clean();
    $this->assertEquals('2 2 2', $output);
  }
}
?>
