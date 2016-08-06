<?php
/**
 * Created by IntelliJ IDEA.
 * User: ColomboM
 * Date: 17/09/14
 * Time: 16.12
 */

 function ciao() {
     echo __FUNCTION__,"\n";
     echo __METHOD__,"\n";
 }

 class A {
     function b() {
         echo __FUNCTION__,"\n";
         echo __METHOD__,"\n";
     }
 }

 ciao();
 /*
  * ciao
  * ciao
  */

 $a = new A();
 $a->b();
 /*
  * b
  * A::b
  * __FUNCTION__ non mette dettagli sulla classe di nessun tipo per B
  * __METHOD__ invece si
  */

 $r = 1.0;
 var_dump(gettype($r));//string(6) "double"
 var_dump(gettype($o));//string(4) "NULL" + Notice: Undefined variable: o
