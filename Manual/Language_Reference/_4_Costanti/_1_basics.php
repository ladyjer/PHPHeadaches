<?php
/**
 * Created by IntelliJ IDEA.
 * User: ColomboM
 * Date: 17/09/14
 * Time: 15.19
 */
 define("2FOO", "10"); //non genera nessun errore,
                       //la costante Viene creata MA NON E' ACCEDIBILE DIRETTAMENTE
 define("_2FOO", "10");//questa invece funziona e crea la costante
 echo "....".constant("2FOO"),PHP_EOL;//.....10 FUNZIONA COSI'
 /*
  * constant è una funzione. restituisce il calore della costante o null se la
  * costante non esiste
  */

 /*
  * non deve iniziare con $
  * può essere anche definita mettendo cost prima del nome, ma fuori da una
  * classe.
  * da php 5.6 si possono definire costanti array, e resources ma è meglio
  * evitare. (occhio esampre sul php 5.5)
  */

  //var_dump(2FOO); //syntax error, unexpected T_STRING..../PHP Parse error:  parse error
  var_dump(_2FOO); //string(2) "10"
  var_dump(constant("_2FOO"));//string(2) "10"
  $cs = get_defined_constants(true);
  var_dump($cs);
  //mettendo false(default) ottieni un array associativo, key=nome costante, valore il valore
  //se metti true le organizza con array indentati Core, 'nome estensione' , user
  //puoi isolare mettendo true
  //quelle definite dall'utente
  /*
array(37) {
  'Core' =>
  array(76) {
    'E_ERROR' =>
    int(1)
    'E_RECOVER
   ...
  'date' =>
  array(14) {
    'DATE_ATOM' =>
    string(13) "Y-m-d\TH:i:sP"
   ...
  'user' =>
  array(2) {
    '2FOO' =>
    string(2) "10"
    '_2FOO' =>
    string(2) "10"
  }
   */

  var_dump($cs['user']);
/*
 * array(2) {
  ["2FOO"]=>
  string(2) "10"
  ["_2FOO"]=>
  string(2) "10"
}
 * nota che 2FOO esiste, ma non può essere acceduta perchè da errore
 * di syntassi
 **/
 if (defined("2FOO")) echo "E' definitia!\n"; //stampa!!

 function ciao() {
     echo _2FOO, "\n";//stampa, non ho bisogno di scrivere global.
                      //le costanti sono visibili a qualsiasi scope
 }

 ciao();//10

 /*
  * Sono case sensitive
  */
 echo "....."._2Foo, "\n";//stampa ......._2Foo + Notice: Use of undefined constant _2Foo - assumed '_2Foo'
 /*
  * Attenzione qui sopra. Stampa il nome della costante sbagliato. non il suo valore
  */

 //const OTTO = 5+3;//syntax error
 const OTTO = 8;
 const UN_ALTRO_OTTO = OTTO; //ok
 $otto = 8;
 //const ANCORA_OTTO = $otto;  //Parse error: syntax error, unexpected T_VARIABLE

 /*
  * define si può usare anche nelle funzioni e nei loop
  * const invece solo al top level, perchè le definisce a compile time.
  */
 define("CIPPA", $otto);
 echo "------".CIPPA,"\n";//stampa ------8

define("GREETING", "Hello you.", true);//il terzo parametro imposta la case-insensitiveness della costante
echo GREETING,"\n"; // outputs "Hello you."
echo Greeting; // outputs "Hello you."

