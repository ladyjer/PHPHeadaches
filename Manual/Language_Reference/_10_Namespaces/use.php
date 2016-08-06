<?php
/**
 * Created by IntelliJ IDEA.
 * User: ColomboM
 * Date: 17/10/14
 * Time: 16:34
 */
 namespace A {
     class B {
         function __construct() {
             echo __METHOD__,PHP_EOL;
         }
     }
 }

 namespace C {
     class D {
         function __construct() {
             echo __METHOD__,PHP_EOL;
         }
     }
 }

 namespace E {
     use \A\B as mamma;//alias di una classe
     use \C\D as dido;

     new mamma();
     new dido();
     //A\B::__construct
     //C\D::__construct
     //new namespace\dido();//PHP Fatal error:  Class 'E\dido' not found
     $c = __NAMESPACE__.'\dido';
     //new $c();//PHP Fatal error:  Class 'E\dido' not found
 }