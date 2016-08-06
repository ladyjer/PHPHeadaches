<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/14/14
 * Time: 10:28 PM
 */
 namespace fumagalli;

 class figlia {
     public function parla() {
         echo __METHOD__.PHP_EOL;
     }
 }

 function parla($x) {
     (new $x())->parla();
 }

 //parla('figlia'); //PHP Fatal error:  Class 'figlia' not found
 parla(__NAMESPACE__.'\figlia'); // fumagalli\figlia::parla
 //parla(__NAMESPACE__."\figlia"); // PHP Fatal error:  Class 'fumagalliiglia' not found
 parla(__NAMESPACE__."\\figlia"); //  fumagalli\figlia::parla

 //The namespace keyword can be used to explicitly request
 //an element from the current namespace or
 //a sub-namespace. It is the namespace equivalent of the self operator for classes.

 $f = new namespace\figlia();
 $f->parla();//fumagalli\figlia::parla