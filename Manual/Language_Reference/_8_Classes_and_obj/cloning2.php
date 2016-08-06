<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/12/14
 * Time: 8:46 PM
 *
 * Funziona anche se non c'è la function __clone
 *
 */

 class a {
     public $x = 10;
 }

 $a = new A;
 $b = clone $a;
 $b->x = 100;
 var_dump($a, $b);
/*
object(a)#1 (1) {
  ["x"]=>
  int(10)
}
object(a)#2 (1) {
  ["x"]=>
  int(100)
}
 */