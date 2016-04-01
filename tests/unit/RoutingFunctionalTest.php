<?php
use \Slim\Http\Environment;
class RoutingFunctionalTest extends \PHPUnit_Framework_TestCase
{
  public function testRouteFoo()
  {
    require __DIR__.'/../../src/routing.php';
    $container['randomizer'] = function()
    {
        $randomizer = $this->getMock('Randomizer', array('getPattern', 'getOperand', 'getOperator'));
        $randomizer->expects($this->once())->method('getPattern')->will($this->returnValue(1));
        $randomizer->expects($this->any())->method('getOperand')->will($this->returnValue(1));
        $randomizer->expects($this->once())->method('getOperator')->will($this->returnValue(1));
        return $randomizer;
    };

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
    $this->assertEquals('1 1 1', $output);
  }
}
?>
