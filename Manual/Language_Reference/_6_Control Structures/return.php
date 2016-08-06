<?php
/**
 * Created by IntelliJ IDEA.
 * User: ColomboM
 * Date: 24/09/14
 * Time: 14.25
 *
 * return esce dal calling module.
 * se in una funzione esce dalla funzione
 * se a global scope esce dallo script e torna allo script che l'ha incluso
 * e il valore diventa quello dell'istruzione 'include'
 * se non c'è nessuno script includente (main script), termina l'esecuzione
 * se non c'è un valore restituito, si assume NULL
 */

 $a = include('return2.php');
 echo $a . "\n";  //4

 $a = include('return2.php'); //4
 $a = include('return2.php'); //4
 echo $a . "\n";  //4

 $a = include_once('return2.php'); //true. $a ha valore true
 $a = include('return2.php'); //4
 echo $a . "\n";  //4

 $a = include('return2.php'); //true. $a ha valore true
 $a = include_once('return2.php'); //true
 echo $a . "\n";  //1
