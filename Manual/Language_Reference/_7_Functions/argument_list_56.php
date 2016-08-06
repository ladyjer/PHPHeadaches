<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/30/14
 * Time: 4:44 PM
 */
 /*
  * Dal 5.6 i paramentri possono essere in numero variabile
  * e arrivare nella function come degli array
  */
 function somma(...$a) {
      var_dump($a);
 }

 /*
  * Si può anche usare ... nella chiamata della funzione per
  * spacchettare un array prima di passarlo alla funzione
  */

 function x($a, $b) {
     /*
      * $a avrebbe 1 e $b 2
      */
 }

 x(...array(1,2));

 /*
  * si possono anche mettere i type hint e mettere i parametri normali.
  * solo quelli dopo i paramentri normali finiscono nell'array cumulativo
  */
 function cccc($a, int ...$c) {
    //$c contiene l'array di interi
 }

 // si può fare anche &...$x, per passare by reference tutti i parametri