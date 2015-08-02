<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/21/14
 * Time: 11:36 PM
 * A generator function looks just like a normal function,
 * except that instead of returning a value, a generator yields as many values as it needs to.
 *
 * When a generator function is called, it returns an object that can be iterated over.
 * When you iterate over that object (for instance, via a foreach loop),
 * PHP will call the generator function each time it needs a value,
 * then saves the state of the generator when the generator yields a
 * value so that it can be resumed when the next value is required.
 *
 * Once there are no more values to be yielded,
 * then the generator function can simply exit, and the calling code continues just as if an array has run out of values.
 * A generator cannot return a value: doing so will result in a compile error. An empty return statement is valid syntax within a generator and it will terminate the generator.
 *
 * The heart of a generator function is the yield keyword.
 * In its simplest form, a yield statement looks much like a return statement,
 * except that instead of stopping execution of the function and returning,
 * yield instead provides a value to the code looping over the
 * generator and pauses execution of the generator function.
 */

 function dai_i_numeri() {
     for($i = 0; $i < 4; $i++) { //definisco il numero di valori generati
         switch ($i) {
             case 0: yield '1' => 'casa';
                     break;
             case 1: yield 'b' => 'mamma';
                 break;
             default: yield 'cippa';
                break;

         }
     }
 }

 $generator = dai_i_numeri();
 foreach ($generator as $k => $v) {
     echo $k, ' ', $v, PHP_EOL;
 }
 /*
1 casa
b mamma
0 cippa
1 cippa
  */
 var_dump($generator);
 //object(Generator)#1 (0) {
//}