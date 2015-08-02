<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/10/14
 * Time: 3:41 PM
 *
 * Una classe può usare + trait.
 * If two Traits insert a method with the same name,
 * a fatal error is produced, if the conflict is not explicitly resolved.
 */

 trait A {
     public function parla() {
         echo __METHOD__,PHP_EOL;
     }
 }

 trait B {
    public function parla($x) {
        echo $x.__METHOD__,PHP_EOL;
    }
 }

 trait C {
    protected function parla() {
        echo __METHOD__,PHP_EOL;
    }
 }

 class Giulia {
     use A,B,C {
         //A::parla insteadof B;//PHP Fatal error:  Failed to evaluate a trait precedence (parla).
                              //Method of trait B was defined to be excluded multiple times
         A::parla insteadof B, C;
         B::parla as parlaForte;
         C::parla as public parlaPiano; //<<<<NOTA CHE HO ESTESO LA VISIBILITA. Si può anche ridurre la visibilita
     }
 }

 $g = new Giulia();
 $g->parla(); //A:parla
 $g->parlaForte(100);//100B::parla
 $g->parlaPiano();//C::parla