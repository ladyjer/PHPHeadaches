<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/10/14
 * Time: 11:52 AM
 *
 * Unless autoloading is used, then classes must be defined before they are used.
 * If a class extends another, then the parent class must be declared before the child class structure.
 * This rule applies to classes that inherit other classes and interfaces.
 */
 $a = new a();
 $a->parla();//A::parla

 class A {
     function parla() {
         echo __METHOD__, PHP_EOL;
     }
 }

 /*
  * Va bene anche se non è il massimo.
  */

 class B extends C {

 }

 $b = new b();
 $b->parla();//C::parla

 class C {
     function parla() {
         echo __METHOD__, PHP_EOL;
     }
 }

 $c = new c();