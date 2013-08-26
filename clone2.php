<?php
class Sample {
  private $a = 1;
  private $instance_no;
  static public $all = 0;

  public function foo() {
    echo "a={$this->a}\n";
  }

  public function bar() {
    echo "instance={$this->instance_no}\n";
  }

  public function __construct() {
    $this->instance_no = ++self::$all;
  }

  public function __clone() {
    $this->instance_no = ++self::$all;
  }
}

$obj = new Sample();
$obj->foo();
$obj->bar();

$obj2 = $obj;
$obj2->foo();
$obj2->bar();

$obj3 = clone $obj;
$obj3->foo();
$obj3->bar();

?>
