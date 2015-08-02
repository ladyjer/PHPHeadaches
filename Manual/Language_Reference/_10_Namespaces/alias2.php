<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/14/14
 * Time: 11:07 PM
 *
 * Importing is performed at compile-time, and so does not affect dynamic class, function or constant names.
 *
 */

 namespace ciao {
     class saluta {
         public function __construct() {
          echo __METHOD__,PHP_EOL;
        }
     }

     class x {
         public function __construct() {
             echo __METHOD__,PHP_EOL;
         }
     }
 }

 namespace {
     use ciao\saluta as salve;

     new salve();//ciao\saluta::__construct
     $x = 'salve';
     //new $x();//PHP Fatal error:  Class 'salve' not found

     class x {
         public function __construct() {
             echo __METHOD__,PHP_EOL;
         }
     }
 }

 namespace salutami {
     //In addition, importing only affects unqualified
     //and qualified names. Fully qualified names are absolute, and unaffected by imports.

     use ciao\x;
     new x(); //ciao\x::__construct
     new \x();//x::__construct
 }