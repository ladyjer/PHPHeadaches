<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/30/14
 * Time: 4:17 PM
 */

 /*
  * Le funzioni non devono essere necessariamente essere
  * definite prima di essere usate ...
  */
 foo(); //FOOOOOO
 function foo() {
     echo "FOOOOOO\n";
 }

 /*
  * ... a meno che la sua definizione non sia condizionata ...
  * (nota la pseudo ri-definizione che si può fare)
  */
 $caso = 1;
 //bar(); //PHP Fatal error:  Call to undefined function bar()
 if ($caso) {
     function bar() {
         echo "Yuppy\n";
     }
 } else {
     function bar() {
         echo "Yappy\n";
     }
 }
 bar(); //Yuppy

 function fuori() {
     function dentro() { //dentro non esiste finchè non viene chiamata fuori
        echo "Dentro\n";
     }
     echo "Fuori\n";
 }

 //dentro();//PHP Fatal error:  Call to undefined function dentro()
 fuori(); //Fuori
 dentro();//Dentro

 /*
  * PHP non supporta la ridefinizione di funzioni, le loro 'undefine'
  * e nemmeno l'overloading
  */


