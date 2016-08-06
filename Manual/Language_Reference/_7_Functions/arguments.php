<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/30/14
 * Time: 4:25 PM
 */
 function aggiungi_uno($a) {
     $a++;
 }

 $a = 0;
 aggiungi_uno($a); echo $a."\n"; //0
 /*
  * PHP Fatal error:  Call-time pass-by-reference has been removed;
  * If you would like to pass argument by reference,
  * modify the declaration of aggiungi_uno()
  *
  * aggiungi_uno(&$a); echo $a."\n";
  *
  */
 function real_aggiungi_uno(&$a) {
    $a++;
 }
 real_aggiungi_uno($a); echo $a."\n";//1

 /*
  * I parametri di default possono essere anche NULL o array.
  * devono essere espressioni costanti. quindi non variabili,
  * class members o chiamate a funzioni
  */

  function default_vanno_alla_fine($a = 10, $b) {
      if (!isset($b)) echo "Non è settato\n";//Non è settato
      if (is_null($b)) echo "E' null\n"; //PHP Notice:  Undefined variable: b ... però stampa "E' null" lo stesso
      echo $a . "-" . $b; //PHP Notice:  Undefined variable: b
  }
  //PHP Warning:  Missing argument 2 for default_vanno_alla_fine()
  default_vanno_alla_fine(100); //100-

  /*
   * dal PHP 5 anche i parametri passati come refrence possono
   * avere un valore di default.
   */

