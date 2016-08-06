<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/11/14
 * Time: 5:34 PM
 */

 class A {
     public $a = 1;
     protected $b = 2;
     private $c = 3;

     public function itera() {
         foreach ($this as $k => $v) {
             echo $k,">>",$v,PHP_EOL;
         }
     }
 }

 $a = new A();
 $a->itera();
/*
a>>1
b>>2
c>>3
 */
 foreach($a as $k => $v) {
     echo $k,">>",$v,PHP_EOL;
 }
//a>>1