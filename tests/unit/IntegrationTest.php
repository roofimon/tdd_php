<?php
use \Slim\Http\Environment;
class IntegrationTest extends \PHPUnit_Framework_TestCase
{
  public function testFail()
  {
    $container = new \Slim\Container;
    $container['environment'] = function () {
        return Environment::mock([
            'SCRIPT_NAME' => '/index.php',
            'REQUEST_URI' => '/foo',
            'REQUEST_METHOD' => 'GET'
        ]);
    };
    $app = new \Slim\App($container);


    $app->get('/foo', function ($req, $res) {
        return $res->write("Halt");
    });
    // Invoke app
    ob_start();
    $app->run();
    $output = ob_get_clean();
    $this->assertEquals('Halt', $output);
  }
}
?>
