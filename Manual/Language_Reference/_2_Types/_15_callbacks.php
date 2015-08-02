<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/13/14
 * Time: 5:34 PM
 *
 * Possono essere usate come callbacks anche metodi statici di classe
 * e metodi di oggetti.
 *
 * vengono passate come stringhe
 */

 function ciao() {
     echo 'function ciao',"\n";
 }

 class K {
     public function B() {
         echo "method K->B\n";
     }
 }

 class A extends K {
     public function B() {
         echo "method A->B\n";
     }

     public static function C() {
         echo "method A->C\n";
     }
 }

 call_user_func("ciao");//function ciao
 call_user_func(array("A", "C"));//method A->C
 //uguale
 call_user_func("A::C");//method A->C
 //uguale
 A::C();//method A->C

 /* the same */
 $a = new A();
 call_user_func(array($a, "B"));//method A->B
 call_user_func(array($a, "b"));//method A->B
 $a->B();//method A->B
 /*
 $A->B();
 PHP Notice:  Undefined variable: A
 PHP Fatal error:  Call to a member function B() on a non-object
 */
 call_user_func(array($a, "parent::b")); //method K->B   <<<questo è interessante!!!!!

 /*
  * Closure - o funzioni anonime
  */
 $clo = function($param1) {
     echo "this is " . $param1 .  "\n";
 };
 $clo(10); //this is 10
 call_user_func($clo, 1000);//this is 1000
 call_user_func($clo, array(1000));//this is Array - ERRORE!! I parametri vanno passati direttamente!
 echo gettype($clo),"\n"; //object
 var_dump($clo);
/*
class Closure#2 (1) {
  public $parameter =>
  array(1) {
    '$param1' =>
    string(10) "<required>"
  }
}
 */