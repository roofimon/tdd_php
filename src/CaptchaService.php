<?php
class CaptchaService
{
    public function __construct(Randomizer $randomizer)
    {
        $this->randomizer = $randomizer;
        $this->pattern = $this->randomizer->getPattern();
        $this->left = $this->randomizer->getOperand();
        $this->operator = $this->randomizer->getOperator();
        $this->right = $this->randomizer->getOperand();
    }

    public function getCaptcha()
    {
        return new Captcha($this->pattern, $this->left, $this->operator, $this->right);
    }
}
?>
