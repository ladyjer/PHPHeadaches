<?php
/**
 * Created by IntelliJ IDEA.
 * User: ColomboM
 * Date: 11/09/14
 * Time: 15.05
 *
 * Conversioni balorde
 */

 class A {
    public $a = 10;
 }
 $a = new A();
 var_dump($a);
/*
class A#1 (1) {
  public $a =>
  int(10)
}
 */
 $a2 = new A();
 var_dump($a2);
/*
class A#2 (1) {  <<<<<nota il #2
  public $a =>
  int(10)
}
 */
 $a3 =& $a2;
 var_dump($a2);
/*
class A#2 (1) {
  public $a =>
  int(10)
}
 */
 $a3->nuovo = 100;
 var_dump($a2);
/*
class A#2 (2) {  <<<<(2) è il numero di properties
  public $a =>
  int(10)
  public $nuovo =>
  int(100)
}
 */

 class B {
    public $b = 99;
 }
 //$b = (B)$a; //non si può fare in PHP
 $b = (object) $a;
 var_dump($b);
/*** nota che #indica il progressivo di creazione, non il n. di oggetti creati in tutto
class A#1 (1) {  ////Non è cambiato nulla
  public $a =>
  int(10)
}
 */
 var_dump((object)null); //viene usata sempre sdClass
/*
object(stdClass)#2 (0) {
}
 */
 var_dump((array)$a);
/*
array(1) {
  ["a"]=>
  int(10)
}
 */
 var_dump((object)10);//sempre scalar
/*
class stdClass#3 (1) {
  public $scalar =>
  int(10)
}
 */

 var_dump((object) "ciao");
/*
class stdClass#3 (1) {
  public $scalar =>
  string(4) "ciao"
}
 */

 $xx = range(1,2);
 $xx['pro'] = 'pp';
 $yy = (object) $xx;
 var_dump($yy);
/*
class stdClass#3 (3) {
  public ${0} =>
  int(1)
  public ${1} =>
  int(2)
  public $pro =>
  string(2) "pp"
}*/
 echo $yy->{0};//PHP Notice:  Undefined property: stdClass::$0
 echo $yy->pro;//pp
 //echo $xx->0;//parse error