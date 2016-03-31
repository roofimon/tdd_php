<?php
class CaptchaServiceTest extends PHPUnit_Framework_TestCase
{
    public function testFail()
    {
        $randomizer = $this->getMock('Randomizer', array('getPattern', 'getOperand', 'getOperator'));
        $randomizer->expects($this->once())->method('getPattern')->will($this->returnValue(1));
        $captchaService = new CaptchaService($randomizer);
        $this->assertInstanceOf('Captcha', $captchaService->getCaptcha());
    }
}
?>
