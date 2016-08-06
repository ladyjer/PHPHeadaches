<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/12/14
 * Time: 8:48 PM
 */

 class a {
     public $a;

     public function __construct(&$x) {
          //$this->a = $x; se lo scrivo così, quello esterno non viene modificato
          $this->a =& $x;
     }

     public function add() {
         $this->a++;
     }

 }

 $x = 100;
 $a = new A($x);
 $a->add();
 echo $x,PHP_EOL;//101
 $b = clone $a;
 $b->add();
 echo $x;//102
