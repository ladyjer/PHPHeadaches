<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/11/14
 * Time: 6:39 PM
 *
 * magic methos usato quando si cerca di usare un oggetto chiamandolo
 * come se fosse una funzione
 */

 class A {
     /*
      * nb. type hinting:
      * When ever you "type $param," it interprets it as a class type, not a native type (string, int, so on).
      * The only non-object type you can type hint is an array.
      *
      */
     public function __invoke(array $a) {
         echo __METHOD__,'-',$a,PHP_EOL;
     }
 }

 $a = new A;
 //$a();  //PHP Catchable fatal error:  Argument 1 passed to A::__invoke() must be an instance of array, none given
 //$a(10);//PHP Catchable fatal error:  Argument 1 passed to A::__invoke() must be an instance of array, integer given
 $s = range(1,2);
 $a($s);
//A::__invoke-Array
// PHP Notice:  Array to string conversion