<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/6/14
 * Time: 10:00 PM
 */

 class A {
     public function test() {
         echo get_class($this), "\n";
         $this->aa();
         $this->bb();
     }

     private function aa() {
         echo __METHOD__,"\n";
     }

     public function bb() {
         echo __METHOD__,"\n";
     }

     protected function ciao() {
         echo __METHOD__,"\n";
     }
 }

class B extends A {

    private function aa() {
        echo __METHOD__,"\n";
    }

    public function bb() {
        echo __METHOD__,"\n";
    }

    public function ciao() {
        parent::ciao();
        echo __METHOD__,"\n";
    }
}

$b = new B();
$b->test();

/*
 * B
 * A::aa
 * B::bb
 */

 $b->ciao();
/* CON NESSUNA SEGNALAZIONE SUL protected diventato public
 * A::ciao
   B::ciao
 */