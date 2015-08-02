<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/3/14
 * Time: 2:52 PM
 */

 class B {
     static function foo() {
         return 'ciao';
     }
 }

 /*
  * Le init delle proprietà vanno fatte solo con delle costanti
  */

 class a {
     ///var $a;   ... just for backward compatibility with PHP 4. ora si deve usare private public or protected
     ///var in PHP 5 è come se fosse public
     public $a;
     //heredoc senza interpolazioni va bene
     public $b = <<<F
CIAO
F;
     //NON VA BENE:PHP Parse error:  syntax error, unexpected '{' (T_CURLY_OPEN), expecting heredoc end (T_END_HEREDOC)
/*     public $bb = <<<F
CIAO {$t}
F;*/
     //così ok
     public $bb = <<<F
CIAO {\$t}
F;
     //nowdoc va bene, non interpola
     public $c = <<<'P'
CIPPA {$d}
P;

     //public $c = 1+1; ERRORE - l'int è definito a compile time. non può essere definita a runtime
     //public $c = B::foo(); errore

}

 $a = new a;
 echo $a->b;