<?php

use phpmock\MockBuilder;
class RandomizerTest extends PHPUnit_Framework_TestCase
{
  public function testRamdomOperator()
  {
      $randomizer = new Randomizer();
      $operator = $randomizer->getOperator();
      $this->assertContains($operator, array(1, 2, 3));
  }

  public function testRandomOperand()
  {
      $randomizer = new Randomizer();
      $this->assertContains($randomizer->getOperand(), array(1, 2, 3, 4, 5 ,6 ,7 ,8 ,9));
  }

  public function testRandomPattern()
  {
      $randomizer = new Randomizer();
      $this->assertContains($randomizer->getPattern(), array(1, 2));
  }
}
?>
