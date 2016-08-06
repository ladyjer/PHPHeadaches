<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/30/14
 * Time: 11:22 PM
 *
 *
 * Le closures possono ereditare le variabili dal parent scope,
 * usando il costrutto use.
 * per parent scope si intende la funzione all'interno della quale
 * è stata definita la closure
 */

 function fuori() {
    $a = '10';

    /*
     * La use serve con le closure. le funzioni normali
     * non la possono usare
     */
    $x = function() use (&$a) {
    //$x = function() {//PHP Notice:  Undefined variable: a
        $a *= 2;
    };

    //se scrivo $x senza (), la closure non viene eseguita
    //per lanciarla occorrono le ()
    $x();

    echo $a;//20
 }
 fuori();

 /*
  * Le funzioni PHP hanno tutte global scope! E' per quello che
  * possono essere chiamate anche da fuori di una funzione
  */
 function fuori2() {
     $a = 10;

     function dentro() {
         $a *= 2;
     }

     dentro();////PHP Notice:  Undefined variable: a
     echo $a;//10
 }
 fuori2();
 /*
  * Funzioni sono casa in-sensitive
  */
 DENTRO();//PHP Notice:  Undefined variable: a