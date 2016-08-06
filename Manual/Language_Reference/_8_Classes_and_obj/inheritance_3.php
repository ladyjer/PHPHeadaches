<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/6/14
 * Time: 10:14 PM
 *
 * POSSO  AUMENTARE LA VISIBILITA' NEGLI OVERLOADING, MA NON POSSO DIMINUIRLA
 *
 */

 class a {
     public $a = 'pubblico';

     public function a() {
        echo 'costruttore vecchia maniera';
     }

     public function ciao() {
         echo "ciao\n";
     }
 }

class b  extends a{
   public $a = 'privato';
   //protected $a = 'privato'; //PHP Fatal error:  Access level to b::$a must be public (as in class a)
   //private $a = 'privato'; //PHP Fatal error:  Access level to b::$a must be public (as in class a)

   public function ciao() {
    //prOTECTED function ciao() {  //PHP Fatal error:  Access level to b::ciao() must be public (as in class a)
    //private function ciao() {  //PHP Fatal error:  Access level to b::ciao() must be public (as in class a)

    }
}

$a = new a; //costruttore vecchia maniera