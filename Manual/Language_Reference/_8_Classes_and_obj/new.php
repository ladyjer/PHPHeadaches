<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/3/14
 * Time: 2:30 PM
 */

 class A {
     public $x;

     static function getNewOne() {
         return new static;
     }
 }

 $a = A::getNewOne();
 $b = $a;
 if ($a == $b) echo "1.Sono uguali\n"; //true
 if ($a === $b) echo "1.Sono identici\n";//true (si riferiscono allo stesso oggetto)

 $b = new $a;                          //crea una nuova instanza della classe di $a
 if ($a == $b) echo "2.Sono uguali\n"; //true
 if ($a === $b) echo "2.Sono identici\n";//FALSE, non stampa nulla

 $a->x = 10;
 $b = new $a;
 var_dump($a);
 var_dump($b);
/*
object(A)#1 (1) {
  ["x"]=>
  int(10)
}
object(A)#3 (1) {
  ["x"]=>
  NULL
}
 */
 $b->x = 20;
 if ($a == $b) echo "3.Sono uguali\n"; //false
 if ($a === $b) echo "3.Sono identici\n";//false


