<?php

//Traits allow us to share functionalities from other classes  without having to extend them = horizontal inheritance 
// 

trait Delivered {

    public static function asDelivered($msg) {
        return $msg . " was delivered";
    }

}

class Message {

    public $ID;
    public $msg;

    public function __construct($ID, $msg) {
        $this->ID = $ID;
        $this->msg = $msg;
    }

    use Delivered;

    public function asDelivered() {

        echo Delivered::asDelivered($this->msg);
    }

}

class snap {

    public $ID;
    public $snap;

    public function __construct($ID, $photo) {
        
    }

    use Delivered;
}

$text = new Message(1, 'hi');
$snap = new snap(1, 'Pic');

$text->asDelivered();
$snap->asDelivered("Seriously?");

class Calculator {
    
    private $total;
    
    public function __construct() {
        $this->total = 0;
    }

    public function add($number) {
        $this->total = Calculator::addTwoNumbers($this->total, $number);
    }

    public function getTotal() {
        return $this->total;
    }

    public static function addTwoNumbers($a, $b) {
//     This doesnt work>    echo $this->total;
        return $a + $b;
    }
}

echo Calculator::addTwoNumbers(1, 2);

$calculator = new Calculator;

echo PHP_EOL;
echo "total at start " . $calculator->getTotal() . PHP_EOL;

$calculator->add(1);
$calculator->add(2);

echo "total after addition " . $calculator->getTotal() . PHP_EOL;