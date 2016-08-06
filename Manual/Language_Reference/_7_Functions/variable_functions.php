<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/30/14
 * Time: 10:40 PM
 */

 function ciao($a) {
     echo "Mi chiamo {$a}\n";
 }

 $x = 'ciao';
 $x('Lola'); //Mi chiamo Lola
 if (is_callable($x, false, $name)) {
     echo $name . "\n";//ciao
 }

 if (function_exists('ciao')) {
     echo "Ciao esiste\n";//Ciao esiste
 }

 class Foo{
     static $va = "Sono la variabile\n";
     static function va() {
         return "Sono la funzione\n";
     }
 }

 $x = 'va';

 //echo Foo::$x;//PHP Fatal error:  Access to undeclared static property: Foo::$x
 echo Foo::$va; //Sono la variabile
 echo Foo::$x(); //Sono la funzione
