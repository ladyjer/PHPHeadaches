<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/18/14
 * Time: 10:24 PM
 *
 * l'assegnazione con = è sempre per valore.
 * dal php 5 gli oggetti vengono invece assegnati by reference.
 * gli oggetti per essere effettivamente copia devono usare la keyford clone
 */

 class A {
     public $b;
 }

 $x = new A;
 $x->b = '100';
 $y = $x;
 var_dump($y);
/*
object(A)#1 (1) {
["b"]=>
  string(3) "100"
}
*/
 $y->b = 500;
 var_dump($x);
/*
 * object(A)#1 (1) {
  ["b"]=>
  int(500)
}
 */
 //non si devono assegnare by ref =& gli oggetti creati con new. quindi mai scrivere ... =& new ...

