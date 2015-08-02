<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/30/14
 * Time: 4:55 PM
 */

 function x(&$a) {
     echo $a."\n";
 }

 //x(10); //PHP Fatal error:  Only variables can be passed by reference

 /*
  * Non esiste una particolare sintassi. va semplicemente usato
  * func_get_args, func_num_args, func_get_arg
  */

 function ciao() {
     for ($i = 0; $i < func_num_args(); $i++) {
         //get_args restituisce un array
         var_dump(func_get_arg($i));
     }
 }

 ciao(1, 'c', array(1,2,3));

 /*
int(1)
string(1) "c"
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
  */

