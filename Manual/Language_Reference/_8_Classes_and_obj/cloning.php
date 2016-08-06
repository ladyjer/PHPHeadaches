<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/12/14
 * Time: 7:14 PM
 *
 */

 class a {
     public $a = 10;

     public function __clone() {
         echo __METHOD__,PHP_EOL;
     }
 }

 $a = new A();
 $a->a = 100;

 $b = clone $a;
 var_dump($b);
 $b->a = 999;
 var_dump($a);
 var_dump($b);
/*
a::__clone
object(a)#2 (1) {
  ["a"]=>
  int(100)
}
object(a)#1 (1) {
  ["a"]=>
  int(100)
}
object(a)#2 (1) {
  ["a"]=>
  int(999)
}
 *
 * Once the cloning is complete, if a __clone() method is defined,
 * then the newly created object's __clone() method will be called,
 * to allow any necessary properties that need to be changed
 */

 //$a->__clone();//PHP Fatal error:  Cannot call __clone() method on objects - use 'clone $obj' instead