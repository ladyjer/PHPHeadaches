<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/19/14
 * Time: 4:30 PM
 */

 /*
  * == e != o <> vengono applicati dopo il type juggling
  *
  */
 if (0 == 'a') echo "stampa!!!\n"; //se si compara una stringa e un numero la stringa viene
//convertita in numero. in questo caso 0. quasta regola si applica anche allo switch
//questa conversione a numero accade anche se si comparano due stringe interamente numeriche

 $a = 'a';
 switch($a) {
   case 0 :   echo 'Stampa il ramo 0!',"\n";
              break;
   case 'a' : echo 'stampa il ramo a',"\n";
              break;
 }
 //Stampa il ramo 0!

 var_dump(100 == '1e2');//bool(true)
 var_dump(10 == '1e1');//bool(true)
 /*
  * Se entrambe sono stringhe numeriche, vengono convertite in numero e poi comparate
  */
 var_dump("01" == '1');//bool(true)
 /*
  * Se non sono stringhe completamente numeriche, vengono comparate come se fosse delle stringhe
  */
 var_dump("01" == '1a');//bool(false) ... questo non mi torna però
 var_dump("1 cane" == '1 gatto');//bool(false) ... questo non mi torna però
 /*
  * Se sono stringhe totalmente numeriche si confrontano come numeri
  * altrimenti come stringhe
  */


 /*
  * Dal manuale PHP
  *
  * For various types, comparison is done according to the following table (in order).
  *
  */
 /* 1. null o stringa comparata con stringa    il null viene convertito in ""
  *                                            e la comparazione avviene in modalità num o stringa
  *                                            (vedi comparison tra stringhe)
  */
 var_dump(null == null);//bool(true)
 /*
  * 2. ... se per primo c'è un boolean,
  * viene tradotto anche l'altro in boolean (FALSe < TRUE)
  */
 var_dump(false == '');//bool(true)
 /*
  * 3. tra oggetti. Built-in classes can define its own comparison,
  * different classes are uncomparable, same class - compare properties the same
  * way as arrays (PHP 4), PHP 5 has its own explanation:
  * When using the comparison operator (==), object variables are compared
  * in a simple manner, namely: Two object instances are equal if they have
  * the same attributes and values, and are instances of the same class.
  * When using the identity operator (===), object variables are identical
  * if and only if they refer to the same instance of the same class.
  *
  */
 class A {
     public $a;
 }
 class B {
    public $b;
 }
 $a = new A;
 $b = new B;
 var_dump($a == $b);//bool(false)
 $a->a = 10;
 $a1 = clone $a;
 $a1->a = 20;
 var_dump($a == $a1);//bool(false)
 $a1->a = 10;
 var_dump($a == $a1);//bool(true)
 /*
  * 4. tra numeri, resources (ID) e stringhe. Se le stringhe sono totalmente numeriche
  * si confrontano in modo numerico. altrimenti come stringhe (vedi sopra)
  */
 /*
  * 5. array con array.  	Array with fewer members is smaller, if key from operand 1
  * is not found in operand 2 then arrays are uncomparable,
  * otherwise - compare value by value
  */
 $a = array(null);
 $b = array('');
 var_dump($a == $b);//bool(true)
 var_dump($a);
 /*
array(1) {
  [0] =>
  NULL
}
  */
 var_dump($b);
/*
array(1) {
  [0] =>
  string(0) ""
}
 */
 $b[] = '';
 var_dump($b);
/*
array(2) {
  [0] =>
  string(0) ""
  [1] =>
  string(0) ""
}
 */
 var_dump($a == $b);//bool(false)
 /*
  * 6. 1° operandao object con qualcosa altro. l'oggetto è sempre maggiore
  */
 /*
  * 7. 1° operando array con qualcos'altro altro.
  * l'array è sempre maggiore
  */
 var_dump($a1);
/*
object(A)#3 (1) {
["a"]=>
  int(10)
} */
 $r = array('a'=>10);
 var_dump($a1 == $r);//bool(false);
 var_dump($a1 > $r);//bool(true); //l'oggetto è sempre maggiore

 /*
  * varie
  */
 var_dump(100 < FALSE);//bool(false) ... 100 viene tradotto in bool, cioè true che è sempre maggiore di false
 var_dump(min(-100, -10, null, 10, 100));//null, vengono tutt tradotti in boolean, e l'unico che da false è il NULL

 /*
  * NON TESTARE MAI DUE FLOATING POINT per EQUALITY
  */
 $f = floor((0.1+0.7) * 10);
 var_dump($f); //float 7
 var_dump($f < 8); //bool(true)

 /*
  * dal php 5.3 è possibile lasciare il secondo operando vuoto. che si traduce nel primo
  */
 $a = 10;
 var_dump($a > 8? : 'ciao');//bool(true)
 var_dump($a > 10? : 'ciao');//string(4) "ciao"
