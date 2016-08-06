<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/6/14
 * Time: 10:08 PM
 *
 *
 * Objects of the same type will have access to each others private
 * and protected members even though they are not the same instances.
 * This is because the implementation specific details are already
 * known when inside those objects.
 */

 class ciao {
     private $a = 'privato';

     public function stampa(ciao $c) {
         $c->a = 'pippa';
         echo $c->a,"\n";
     }
 }

 $c1 = new ciao();
 $c2 = new ciao();
 var_dump($c2);
 $c1->stampa($c2);
 var_dump($c2);
/*
object(ciao)#2 (1) {
  ["a":"ciao":private]=>
  string(7) "privato"
}
pippa
object(ciao)#2 (1) {
  ["a":"ciao":private]=>
  string(5) "pippa"
}
 */

