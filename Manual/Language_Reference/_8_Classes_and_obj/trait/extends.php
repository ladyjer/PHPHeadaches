<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/10/14
 * Time: 4:09 PM
 *
 * COme le classi usano i trait. anche tra trait si  possono usare
 */

 trait A {
     function parla() {
         echo __METHOD__,PHP_EOL;
     }
 }

 trait B {
     use A;

     function scrive() {
         self::parla();
         echo __METHOD__,PHP_EOL;
     }
 }

 class Giulia {
     use B;
 }

 $g = new Giulia();
 $g->parla();
 $g->scrive();
/*
A::parla
A::parla
B::scrive
 */