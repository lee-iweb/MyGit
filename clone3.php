<?php
class Sample {
  private $a = 1;

  public function plus() {
    $this->a++;
  }

  public function foo() {
    echo "a={$this->a}\n";
  }
}

class Sample2 {
  public $b = 1;
  public $obj;

  public function plus() {
    $this->b++;
  }

  public function foo() {
    echo "b={$this->b}\n";
  }

}

$obj = new Sample2();
$obj->obj = new Sample();
$obj2 = clone $obj; // clone

$obj->plus();
$obj->foo();
$obj2->foo();

// 修改对象的引用属性
$obj->obj->plus();
$obj->obj->foo();
$obj2->obj->foo();


?>
