<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/9/14
 * Time: 10:49 PM
 */
 $a = array(1,2,3,); ///nota che posso lasciare la ,
 $b = [1,2,3,]; //forma breve senza array(...
 ///negli array associativi, le chiavi possono essere solo int o stringhe
 var_dump($a);
/*
array(3) {
  [0] =>
  int(1)
  [1] =>
  int(2)
  [2] =>
  int(3)
}
 */
 $a[1.9] = 'ciao';
 var_dump($a);
/*
array(3) {
  [0]=>
  int(1)
  [1]=>
  string(4) "ciao"
  [2]=>
  int(3)
}
 */
 ///le stringhe con numeri vengono tradotte in int.
 //>>>>ma se iniziano con 0 no, non sono dei decimal integer validi. le prenerà come numeri ottali
 $a["5"] = '5';
 $a["05"] = '10';
 var_dump($a);
/*
array(5) {
  [0]=>    int(1)
  [1]=>    string(4) "ciao"
  [2]=>    int(3)
  [5]=>    string(1) "5"
  ["05"]=> string(2) "10"
}
*/
  $a[null] = 'xxxx'; //key ""
  $a[true] = 'yyy'; //1
  $a[false]= 'ffff';//0
  var_dump($a);
/*
array(6) {
  [0]=>
  string(4) "ffff"
  [1]=>
  string(3) "yyy"
  [2]=>
  int(3)
  [5]=>
  string(1) "5"
  ["05"]=>
  string(2) "10"
  [""]=>
  string(4) "xxxx"
}
 *
 * Non si possono usare come chiave array o oggetto. generano il warning: invalid offset type
 * Se non si mette la chiave, [], viene usato l'intero successivo al maggiore già presente nell'array
 *
 */
 $b = [0 => 'ciao', 'mamma' => 'miao'];
 $b[] = 'papa';
 var_dump($b);
/* DA NOTARE L'ORDINE INTERNO DI INSERIMENTO
 * array(3) {
  [0]=>
  string(4) "ciao"
  ["mamma"]=>
  string(4) "miao"
  [1]=>
  string(4) "papa"
}
 */
 $c = ['a', 'b', 5 => 'c', 'd'];
 var_dump($c);
/*array(4) {
  [0]=>
  string(1) "a"
  [1]=>
  string(1) "b"
  [5]=>
  string(1) "c"
  [6]=>
  string(1) "d"
}
 */

