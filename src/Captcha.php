<?php
class Captcha {
  function __construct($pattern, $left, $operator, $right) {
    $this->pattern = $pattern;
    $this->left = $left;
  }

  function getLeftOperand() {
    if($this->pattern == 1){
      return $this->left;
    }else{
      if($this->left == 1)
        return "One";
      if($this->left == 2)
        return "Two";
    }
  }

}
?>
