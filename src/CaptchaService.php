<?php
class CaptchaService
{
    public function __construct(Randomizer $randomizer)
    {
        $this->randomizer = $randomizer;
        $this->pattern = $this->randomizer->getPattern();
    }

    public function getCaptcha()
    {
        return new Captcha($this->pattern, 2, 2, 2);
    }
}
?>
