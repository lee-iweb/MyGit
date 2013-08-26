<?php
/** variable clone */
/**
$a = 1;
$b = $a;
echo $b;
echo "\n";
unset($a);
echo $b;
echo "\n";
*/

/** object clone */
class Sample {
  private $a = 1;

  public function plus(){
    $this->a++;
  }

  public function foo(){
    echo "a={$this->a}\n";
  }
}

$obj = new Sample();

$obj2 = $obj;

$obj2->plus();
$obj2->foo();
$obj->foo();

$obj3 = new Sample();
$obj4 = clone $obj3;

$obj4->plus();
$obj4->foo();

$obj3->foo();
