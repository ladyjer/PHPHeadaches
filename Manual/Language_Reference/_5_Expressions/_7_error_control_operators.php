<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/19/14
 * Time: 5:00 PM
 *
 * Si tratta del @, che può essere messo prima delle ESPRESSIONI
 * E' per quello che non si può mettere prima di echo, che è un costrutto.
 * I messaggi d'errore verranno ignorati
 * un eventuale error_handler li riceve comunque, ma se chiama error_reporting
 * questa restituisce 0
 */

 $a = array(1,2);
 echo "1.",$a[2],"\n";//Non stampa assolutamente niente e PHP Notice:  Undefined offset: 2
 echo "2.",@$a[2],"\n";//Non stampa nulla e niente notice, non stampa nulla ovviamente
 /*
  * 1.
  * 2.
  */
 var_dump(@$a[2]);//stampa NULL

 function ciao() {
     echo "CIAO\n";
 }

 //ciao_non(); //PHP Fatal error:  Call to undefined function ciao_non()
 /*
  * se sopprimo il fatal error, lo script non finisce, e non saprò nemmeno perhè
  *
  */
 @ciao_non();
 echo "...FINE DELLO SCRIPT"; //NON VERRA' STAMPATO