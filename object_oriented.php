<?php

// class Fruit {
//     public $mango = 20;
//     public $orange = 30;
//     function get_price() {
//         echo "<h1>"."hello"."</h1>";
//     }
// }
// $obj = new Fruit();
// $obj->get_price();
// echo "<h1>".$obj->mango."</h1>";
// print_r("<h1>".$obj->orange."</h1>");

// class calculator {
    // protected $x, $y; // Encapsulation
    // private $x, $y;   // Encapsulation
//     public $x, $y;
//     function value_set($a, $b) {
//         $this->x = $a;
//         $this->y = $b;
//     }
//     function sum() {
//         echo "<h1>".($this->x + $this->y)."</h1>";
//     }
// }
// $obj1 = new calculator;
// $obj1->x = 400;
// $obj1->y = 40;
// $obj1->value_set(40, 100);
// print_r("<h1>".$obj1->x."</h1>");
// print_r("<h1>".$obj1->y."</h1>");
// $obj1->sum();

// class Calculator {
//     public $x, $y;
//     function value_set($a, $b) {
//         $this->x = $a;
//         $this->y = $b;
//     }
//     function sum() {
//         echo "<h1>".($this->x + $this->y)."</h1>";
//     }
// }
// class Calculator_pro extends Calculator {
// }
// Inheritance
// $obj_pro = new Calculator_pro;
// $obj_pro->value_set(40, 110);
// $obj_pro->sum();

// class Calculator {
//     public $x, $y;
//     function value_set($a, $b) {
//         $this->x = $a;
//         $this->y = $b;
//     }
//     function sum() {
//         echo "<h1>".($this->x + $this->y)."</h1>";
//     }
// }
// class Calculator_pro extends Calculator {
//     function sum() {
//         echo "<h1>".($this->x - $this->y)."</h1>";
//     }
// }
// Polymorphism
// $obj = new Calculator;
// $obj->value_set(40, 110);
// $obj->sum();
// $obj_pro = new Calculator_pro;
// $obj_pro->value_set(40, 110);
// $obj_pro->sum();

// class Calculator {
//     public $x, $y; // Any class can use its methods
    // protected $x, $y; // Parent-class and Child-class can use its methods
    // private $x, $y; // Parent-class can use its methods
//     function value_set($a, $b) {
//         $this->x = $a;
//         $this->y = $b;
//     }
//     function sum() {
//         echo "<h1>".($this->x + $this->y)."</h1>";
//     }
// }
// class Calculator_pro extends Calculator {
//     function sub() {
//         echo "<h1>".($this->x - $this->y)."</h1>";
//     }
// }
// class Calculator_pro_max extends Calculator_pro {
//     function mul() {
//         echo "<h1>".($this->x * $this->y)."</h1>";
//     }
// }
// Inheritance
// $obj_pro_max = new Calculator_pro_max;
// $obj_pro_max->value_set(40, 110);
// $obj_pro_max->sum();
// $obj_pro_max->sub();
// $obj_pro_max->mul();

// class no_reason {
//     function __construct()
//     {
//         echo "<h1>"."hello"."</h1>";
//     }
//     function hi()
//     {
//         echo "<h1>"."hi"."</h1>";
//     }
//     function __destruct()
//     {
//         echo "<h1>"."world"."</h1>";
//     }
// }
// $a = new no_reason;
// $a->hi();

// class no_reason {
//     private $a, $b;
//     // protected $a, $b;
//     function __construct($a, $b)
//     {
//         $this->a = $a;
//         $this->b = $b;
//     }
//     function sum()
//     {
//         echo "<h1>".($this->a + $this->b)."</h1>";
//     }
// }
// $obj = new no_reason(12, 23);
// $obj->sum();

// class gretting {
//     public function welcome() {
//         echo "<h1>"."hello world"."</h1>";
//     } 
// }
// $a = new gretting();
// $a->welcome();

class gretting {
    public static function welcome() {
        echo "<h1>"."hello new world"."</h1>";
    } 
}
gretting::welcome();

?>