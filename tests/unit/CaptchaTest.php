<?php
class CaptchaTest extends PHPUnit_Framework_TestCase
{
  public function testFirstPatternLeftShouldBe1()
  {
    $DUMMY_OPERATOR = 1;
    $DUMMY_RIGHT    = 1;
    $captcha = new Captcha(1, 1, $DUMMY_OPERATOR, $DUMMY_RIGHT);
    assertThat("1", is(equalTo($captcha->getLeftOperand())));
  }
  public function testFirstPatternLeftShouldBe2()
  {
    $captcha = new Captcha(1, 2, 1, 1);
    assertThat("2", is(equalTo($captcha->getLeftOperand())));
  }
  public function testFirstPatternLeftShouldBe9()
  {
    $captcha = new Captcha(1, 9, 1, 1);
    assertThat("9", is(equalTo($captcha->getLeftOperand())));
  }
  public function testSecondPatternLeftShouldBeOne()
  {
    $captcha = new Captcha(2, 1, 1, 1);
    assertThat("One", is(equalTo($captcha->getLeftOperand())));
  }
  public function testSecondPatternLeftShouldBeTwo()
  {
    $captcha = new Captcha(2, 2, 1, 1);
    assertThat("Two", is(equalTo($captcha->getLeftOperand())));
  }
}
?>
