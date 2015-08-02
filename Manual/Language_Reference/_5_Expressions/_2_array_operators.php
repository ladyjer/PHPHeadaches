<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/21/14
 * Time: 2:32 PM
 *
 *
 *  + unione di due array (se le chiavi a dx ci sono già a sx, quelle a dx vengono perse)
 *
 * == stesse coppie di chiave valore (!=)
 *
 * === stesse coppie stesso ordine stesso tipo (!==)
 *
 */

 $a = array ('mela','pera','banana');
 $b = array (1=>'pera','mela','banana');
 $c = $a + $b;
 var_dump($c);
/*
array(4) {
  [0]=>
  string(4) "mela"
  [1]=>
  string(4) "pera"
  [2]=>
  string(6) "banana"
  [3]=>
  string(6) "banana"
}
 */
 if ($a == $b) echo "sono uguali\n"; //NON VIENE STAMPATO
 $b = array ('banana','mela','pera');
 if ($a == $b) echo "sono uguali\n"; //NON VIENE STAMPATO - guardano anche le chiavi!!!

 $a = array("a" => 'mela', 'b' => 'pera');
 $b = array("b" => 'pera', 'a' => 'mela');
 var_dump($a);
 var_dump($b);
/*
array(2) {
  ["a"]=>
  string(4) "mela"
  ["b"]=>
  string(4) "pera"
}
array(2) {
  ["b"]=>
  string(4) "pera"
  ["a"]=>
  string(4) "mela"
}
 */
 if ($a == $b) echo "sono uguali\n"; //VIENE STAMPATO
 if ($a === $b) echo "sono identici\n"; //NON VIENE STAMPATO

 $a = array("0" => 'mela', "1" => 'pera');
 $b = array(1 => 'pera', 0 => 'mela');
 if ($a == $b) echo "sono uguali\n"; //VIENE STAMPATO
 if ($a === $b) echo "sono identici\n"; //NON VIENE STAMPATO
