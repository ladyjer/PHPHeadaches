<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/11/14
 * Time: 5:13 PM
 *
 * Method overloading
 *
 * public mixed __call ( string $name , array $arguments )
 * public static mixed __callStatic ( string $name , array $arguments )
 * __call() is triggered when invoking inaccessible methods in an object context.
 * __callStatic() is triggered when invoking inaccessible methods in a static context.
 */

 class A {
     public function __call($name, array $args) {
          var_dump($name);
          var_dump($args);
     }

     public static function __callstatic($name, array $args) {
         echo 'Static one',PHP_EOL;
         var_dump($name);
         var_dump($args);
     }
 }

 $a = new A();
 $a->saluta('mamma');
/*
string(6) "saluta"
array(1) {
  [0]=>
  string(5) "mamma"
}
 */
 $a::saluta();
/*
Static one
string(6) "saluta"
array(0) {
}
 */