<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/30/14
 * Time: 11:02 PM
 *
 *
 *
 * SONO MOLTO UTILI COME PARAMETRI CALLBACK
 */

 function chiama_altro(callable $x) {
     $x();
 }

 //chiama_altro(10);//PHP Catchable fatal error:  Argument 1 passed to chiama_altro() must be an instance of callback, integer given
 //se metto @ l'errore si silenzia MA ESCO COMUQNUE
 //@chiama_altro(10);

 try {
   //chiama_altro(10);  //PHP Catchable fatal error:  Argument 1 passed to chiama_altro() must be an instance of callback, integer given
 } catch (Exception $e) {
   echo $php_errormsg;//NON FUNZIONA
}

/*
E_RECOVERABLE_ERROR ( integer )
Catchable fatal error. It indicates that a probably dangerous error occured,
but did not leave the Engine in an unstable state. If the error
is not caught by a user defined handle (see also set_error_handler()),
 the application aborts as it was an E_ERROR.
 */

 function ciao() {
     echo "Ciao mondo!\n";
 }

 chiama_altro('ciao');//Ciao mondo!
 $x = 'ciao';
 chiama_altro($x);//Ciao mondo!
 //chiama_altro($x());//PHP Catchable fatal error:  Argument 1 passed to chiama_altro() must be callable, null given
 $x = function() {
     echo "Ce la facciamo?\n";
 };
 chiama_altro($x);//Ce la facciamo?

 chiama_altro(function() {
     echo "Ce l'abbiamo fatta!\n";
 }); //Ce l'abbiamo fatta!

 function contorta() {
     return function() {
         echo "Mamma mia che casino!\n";
     };
 }

 chiama_altro(contorta());//Mamma mia che casino!

 /*
  * Closure è una classe interna del PHP
  */

