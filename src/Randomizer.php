<?php
class Randomizer
{
    public function getOperator()
    {
        return rand(1, 3);
    }

    public function getOperand()
    {
        return rand(1, 9);
    }

    public function getPattern()
    {
        return rand(1, 2);
    }
}
?>
