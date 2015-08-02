<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/10/14
 * Time: 12:05 PM
 * The Scope Resolution Operator (also called Paamayim Nekudotayim)
 * or in simpler terms, the double colon, is a token that allows access to STATIS,
 * CONSTANTS, and OVERRIDDEN properties or methods of a class.
 */

 class A {
     const CIAO = 'Ciao';
 }

 $a = new A();
 $x = 'a';
 echo $a::CIAO, PHP_EOL;//Ciao
 echo $x::CIAO, PHP_EOL;//Ciao
 echo $a->CIAO, PHP_EOL;//PHP Notice:  Undefined property: A::$CIAO
 /*
  * No, it's not possible to set the visibility of constants in a class
  * Dal manuale, nei commenti:
  * It may seem obvious, but class constants are always publicly visible.
  * They cannot be made private or protected. I do not see it state that in the docs anywhere.
  */

 //Three special keywords
 //self, parent and static are used to access properties or methods from inside the class definition

 class B extends A {
     const CIAO = 'Hallo';

     public static function saluta() {
         echo self::CIAO, PHP_EOL;
         echo parent::CIAO, PHP_EOL;
     }
 }

 B::saluta();
/*
 * Hallo
 * Ciao
 */
 $x = 'b';
 $x::saluta();
 /*
  * Hallo
  * Ciao
  */
 $b = new B();
 $b::saluta();
/*
 * Hallo
 * Ciao
 */