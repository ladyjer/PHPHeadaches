<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/10/14
 * Time: 2:58 PM
 *
 * When inheriting from an abstract class, all methods marked abstract
 * in the parent's class declaration must be defined by the child; additionally,
 * these methods must be defined with the same (or a less restricted) visibility
 */

 abstract class abs1 {
     abstract protected function parla();
 }
 /*
 class abs2 extends abs1 {

 }//PHP Fatal error:  Class abs2 contains 1 abstract method and must therefore
  //be declared abstract or implement the remaining methods (abs1::parla)

 $a = new abs1();
 */

 class abs2 extends abs1 {
     //nota che ho portato a public. basta estendare la visibilità. non la si può limitare invece.
     //public function parla($x)//PHP Fatal error:  Declaration of abs2::parla() must be compatible with abs1::parla()
     public function parla($x = 0)//questa versione è ok perchè ha dei paametri in più con valori di default
     {
         echo __METHOD__;
     }
 }
 //$a1 = @new abs1(); //PHP Fatal error:  Cannot instantiate abstract class abs1
 //la @silenzia soltanto l'errore. il fatal error cmq non fa andare avanti l'esecuzione e lo
//script si ferma.
 $a = new abs2();
 $a->parla();


