<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/10/14
 * Time: 4:33 PM
 *
 * Overloading in PHP provides means to dynamically "create" properties and methods.
 * These dynamic entities are processed via magic methods one can establish in a class for various action types.
 * The overloading methods are invoked when interacting with properties or methods
 * that have not been declared or are not visible in the current scope
 *
 * Tutti i metodi 'overloading' devono essere PUBLIC
 * Non possono avere parametri passati by reference
 *
 * Property overloading:
 * __get
 * __set
 * __isset
 * __unset
 *
 * Property overloading only works in object context.
 * These magic methods will not be triggered in static context.
 * Therefore these methods should not be declared static.
 * As of PHP 5.3.0, a warning is issued if one of the magic overloading methods is declared static.
 */

 class A {
     public $hallo;

     //public static function __get($n) { PHP Warning:
     //The magic method __get() must have public visibility and cannot be static
     public function __get($n) {
         echo __METHOD__,PHP_EOL;
     }

     public function __set($n, $v) {
         echo __METHOD__,PHP_EOL;
         $this->$n = $v;
     }

     public function __isset($name)
     {
         echo "Is '$name' set?\n";
         return isset($this->$name);
     }

     public function __unset($name)
     {
         echo "Unsetting '$name'\n";
         unset($this->$name);
     }
 }

 $a = new A();
 $a->ciao;//A::__get
 $a->hallo;//nulla, __get non viene usato
 $a->ciao = 10;//A::__set
 var_dump($a);
/*
object(A)#1 (2) {
["hallo"]=>
  NULL
  ["ciao"]=>
  int(10)
}*/
 $a->ciao;//nulla, non viene + chiamato
 echo isset($a->ciao),PHP_EOL;//1
 echo isset($a->hallo),PHP_EOL;//null
 echo isset($a->bonjo),PHP_EOL;//Is 'bonjo' set? e poi null

 unset($a->ciao);
 var_dump($a);
/*
object(A)#1 (1) {
["hallo"]=>
  NULL
}*/
 unset($a->xxx);//Unsetting 'xxx'
 var_dump($a);
/*
object(A)#1 (1) {
  ["hallo"]=>
  NULL
}
 */