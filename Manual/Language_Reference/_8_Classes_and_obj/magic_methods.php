<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/11/14
 * Time: 6:14 PM
 *
 * The function names __construct(), __destruct(), __call(), __callStatic(), __get(),
 * __set(), __isset(), __unset(), __sleep(), __wakeup(), __toString(), __invoke(),
 * __set_state() and __clone() are magical in PHP classes.
 *
 */

 class A {
     public $a = 1;
     protected $b = 2;
     private $c = 3;

     public function __sleep() {
         echo 'Buona notte',PHP_EOL;
         return array('a','b','c');
     }

     public function __wakeup() {
         /*
          * Le variabili sono già al loro posto
          */
         var_dump($this);
         echo 'Buongiorno',PHP_EOL;
     }

     public function __toString() {
         return "Ciao {$this->a}";
     }
 }

 $a = new A;

 $x = serialize($a);
 echo $a,PHP_EOL,$x,PHP_EOL;//Ciao 1 ... e altro
 $s = (string) $a;
 echo $s,PHP_EOL;//Ciao 1
 echo 'Oggi dico ' . $a,PHP_EOL; //Oggi dico Ciao 1
 unserialize($x);

/*
Buona notte
Ciao 1
O:1:"A":3:{s:1:"a";i:1;s:4:"*b";i:2;s:4:"Ac";i:3;}
Ciao 1
Oggi dico Ciao 1
object(A)#2 (3) {
  ["a"]=>
  int(1)
  ["b":protected]=>
  int(2)
  ["c":"A":private]=>
  int(3)
}
Buongiorno
 */