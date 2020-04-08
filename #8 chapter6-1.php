<?php
// 間違い探し
class Greeting {
    private $myName;

    public function __construct($name) {
        $this->myName = $name;
    }

    public function sayHello() {
        echo "hello " . $this->myName;
    }
}

$paiza = new Greeting("paiza");
$paiza->sayHello();
?>