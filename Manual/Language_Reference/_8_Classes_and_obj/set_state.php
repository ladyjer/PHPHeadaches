<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/11/14
 * Time: 6:47 PM
 *
 * var_export — Outputs or returns a parsable string representation of a variable
 * var_export() gets structured information about the given variable.
 * It is similar to var_dump() with one exception: the returned representation is valid PHP code.
 * This static method is called for classes exported by var_export() since PHP 5.1.0.
 *
 * static object __set_state ( array $properties )
 *
 * E' una specie di toString, ma dedicata alla var_export e statica
 *
 */

 class A {
     public $a = 10;
     private $b = 20;
     protected $c = 30;

     public static function __set_state($an_array) {
          echo __METHOD__,PHP_EOL;
          return 'ciao';
     }
 }

 $a = new A();
 $x = var_export($a, true);///....the returned representation is valid PHP code
 echo $x;
/*
A::__set_state(array(
   'a' => 10,
   'b' => 20,
   'c' => 30,
))
 */
 $x = eval("\$b = {$x};");
 var_dump($x);//NULL ... eval ha avuto buon esito
 var_dump($b);//string(4) "ciao"