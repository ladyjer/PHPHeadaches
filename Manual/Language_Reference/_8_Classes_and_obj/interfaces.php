<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/10/14
 * Time: 3:09 PM
 *
 * All methods declared in an interface must be public, this is the nature of an interface.
 * Prior to PHP 5.3.9, a class could not implement two interfaces that specified a method with the same name,
 * since it would cause ambiguity.
 * More recent versions of PHP allow this as long as the duplicate methods have the same signature.
 * The class implementing the interface must
 * use the exact same method signatures as are defined in the interface. Not doing so will result in a fatal error.
 */

 interface A {
     public function parla();
     public function ascolta();
 }

 interface B extends A {
     //const ETA; errore, deve esserci la init
     const ETA = 10;
     //protected function ascolta(); //PHP Fatal error:  Access type for interface method B::ascolta() must be omitted
     public function pensa();
     //public function parla($x);//PHP Fatal error:  Declaration of B::parla() must be compatible with A::parla()
     public function parla($x = 0);//ok

 }

 interface C {
     //public function ascolta($y);   //1a versione
     //public function ascolta($y = 0); //2a versione
     public function ascolta(); //3a versione
 }

 class concreta implements B, C {  //PHP Fatal error:  Declaration of A::ascolta() must be compatible with C::ascolta($y)
                                   //questo accade se lascio la versione 1a o 2a di ascolta in interface C. devono
                                   //essere uguali proprio. non solo compatibili
     //const ETA = 100;//PHP Fatal error:  Cannot inherit previously-inherited or override constant ETA from interface B

     public function pensa()
     {
         // TODO: Implement pensa() method.
     }

     //public function parla()//PHP Fatal error:  Declaration of concreta::parla() must be compatible with B::parla($x = 0)
     public function parla($x = 0)
     {
         // TODO: Implement parla() method.
     }

     public function ascolta()
     {
         // TODO: Implement ascolta() method.
     }
 }

 $c = new concreta();
 echo B::ETA;//le costanti delle interfacce si possono stampare