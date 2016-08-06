<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/21/14
 * Time: 5:22 PM

 *FUNZIONA SU ARRAY E OGGETTI
 * si basa sull' array internal pointer. quindi modificarlo all'interno del ciclo
 * può dare qualche problema
 */

 //foreach (array(1,2,3) as &$value) {
 foreach (array(1,2,3) as &$value) {
     $value *= 2;
     var_dump($value);
 }

/*
 * Risponde così sia che metto & si che non c'è
 */
 var_dump(gettype($value));//string(7) "integer"
 echo($value), "\n";//6

 $a = array('A' => array('mele','pere'), 'B' => array('cane','gatto'));
 foreach($a as list($frutto, $animale)) {
     echo $frutto . "-" . $animale . "\n";
 }
/*
 *
mele-pere
cane-gatto
 */

/*
 * Questa nota è sparita dal manuale:
 *
 * "Unless the array is referenced, foreach operates on a copy of the specified array
 * and not the array itself.
 * foreach has some side effects on the array pointer.
 * Don't rely on the array pointer during or after the foreach without resetting it."
 */

 /*
 foreach (&$a as $valore) { //QUESTO NON SI PUÒ FARE &$a, da syntax error
    var_dump($a);
 } */

 foreach ($a as $valore) { //QUESTO NON SI PUÒ FARE &$a, da syntax error
    $valore = 'ciii';
 }
 var_dump($a);
/*
array(2) {
  ["A"]=>
  array(2) {
    [0]=>
    string(4) "mele"
    [1]=>
    string(4) "pere"
  }
  ["B"]=>
  array(2) {
    [0]=>
    string(4) "cane"
    [1]=>
    string(5) "gatto"
  }
 */
 foreach ($a as &$valore) { //QUESTO NON SI PUÒ FARE &$a, da syntax error
     $valore = 'ciii';
 }
 var_dump($a);
/*
array(2) {
  ["A"]=>
  string(4) "ciii"
  ["B"]=>
  &string(4) "ciii"
}
 */