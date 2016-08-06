<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/12/14
 * Time: 9:16 PM
 *
 * When using the comparison operator (==), object variables are compared in a simple manner,
 * namely: Two object instances are equal if they have the same attributes and values, and are instances of the same class.
 * When using the identity operator (===), object variables are identical if and only
 * if they refer to the same instance of the same class.
 * if they refer to the same instance of the same class.
 *
 */

 class a {

 }

 $a = new a;
 $b = new a;

 function parla(&$x, &$y) {
     if ($x === $y) echo "sono identici\n";
     if ($x == $y) echo "sono uguali\n";
 }

 parla($a, $b);//sono uguali
 parla($a, $a);//sono uguali, sono identici
 $a->x = 10;
 parla($a, $b);//non stampa nulla

 //same instance of the same class
 $c = $a;
 parla($a, $c);//sono uguali, sono identici
