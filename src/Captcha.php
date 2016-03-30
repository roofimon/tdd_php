<?php
class Captcha
{
  function __construct($pattern, $left, $operator, $right)
  {
    $this->pattern = $pattern;
    $this->left = $left;
  }

  function getLeftOperand()
  {
    if($this->pattern == 1){
      return $this->left;
    }else{
      $mapping = array("One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine");
      return $mapping[$this->left-1];
    }
  }
}
?>
