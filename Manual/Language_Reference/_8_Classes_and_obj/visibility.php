<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/6/14
 * Time: 9:49 PM
 */

 class A {
     private $private = 'private';
     protected $pr = 'protected';
     public $pu = 'public';
 }

 $a = new A;
 //$a->private; //PHP Fatal error:  Cannot access private property A::$pr

 class B extends A {
     protected $pr = 'protetto';

     function ciao() {
         echo $this->private, "\n";//PHP Notice:  Undefined property: B::$private
         echo $this->pr, "\n";     //protetto
         echo $this->pu, "\n";     //public
     }
 }

 $b = new B;
 $b->ciao();
 //$b->pr;//PHP Fatal error:  Cannot access protected property B::$pr