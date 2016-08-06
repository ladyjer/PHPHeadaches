<?php
/**
 * Created by IntelliJ IDEA.
 * User: ColomboM
 * Date: 10/09/14
 * Time: 11.44
 */
 $a = range(1,5);
 print_r($a{1}); echo "\n"; //2 .... funziona anche con {}

 function getArray() {
   return range(1,4);
 }
 print_r(getArray()[1]); echo "\n"; //stampa 2. Si può fare dal 5.5 in poi
 var_dump($a[10]); //stampa NULL - restituisce un notice:Undefined offset: 10
 /*
  * se aggiungo in coda [] l'indice che usa è l'ultimo intero mai usato nell'array
  * (non quello in uso al momento) + 1
  */
 var_dump($a);
/*
 * array(5) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
  [3]=>
  int(4)
  [4]=>
  int(5)
}
 */
 unset($a[4]);
 $a[] = 100;
 var_dump($a);
/*
array(5) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
  [3]=>
  int(4)
  [5]=>
  int(100)
}
 */

 $x = 100;
 $x[1] = 1000;//Warning: Cannot use a scalar value as an array
 var_dump($x);//non succede nulla, int(100)
 unset($x);

 $x[ciao] = 'miao';  //PHP Notice:  Use of undefined constant ciao - assumed 'ciao'
 var_dump($x);
/*
array(1) {
  ["ciao"]=>
  string(4) "miao"
}
 */
 echo "Dimmi tu $x[ciao]\n"; //Dimmi tu miao senza notice - in questo caso non viene cercata l'eventuale costante
 echo "Dimmi tu {$x[ciao]}\n"; //Dimmi tu miao - PHP Notice:  Use of undefined constant ciao - assumed 'ciao'

 /*
  * all'interno degli "" le constanti vengono interpolate solo se si trovano tra {}
  */
 //echo "Dimmi $x['ciao']\n";//PHP Parse error:  syntax error, unexpected '' (T_ENCAPSED_AND_WHITESPACE), expecting identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING)
 /*
  * Dal manuale
  * Note: To reiterate, inside a double-quoted string, it's valid to not surround array indexes with quotes so "$foo[bar]" is valid.
  */



