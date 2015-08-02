<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/3/14
 * Time: 2:38 PM
 */
 class papa {
     function saluta() {
         echo "Buongiorno\n";
     }

     static function foo() {
         echo __CLASS__,"/",__METHOD__;
     }
 }

 class figlio extends papa {
    function saluta() {
        parent::saluta();
        echo "Ciao\n";
    }

    static function foo() {
        echo __CLASS__,"/",__METHOD__,"/",parent::foo();
    }

 }

 $f = new figlio();
 $f->saluta();
/*
Buongiorno
Ciao
 */
 $f->foo();//figlio/figlio::foo/papa/papa::foo

 /*
  * quando si fa un overriding, la signature deve essere la stessa, atrimenti
  * viene lanciato un errore e_strict level error (questo non vale per i costruttori)
  */

 class figlia extends papa {
     function saluta($gg) {
         parent::saluta();
         echo "Ciao {$gg} \n";
     }
 }

 $f = new figlia();
 $f->saluta(99);//Strict standards: Declaration of figlia::saluta() should be compatible with papa::saluta()