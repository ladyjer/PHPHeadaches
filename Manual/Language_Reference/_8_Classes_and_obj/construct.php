<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/3/14
 * Time: 3:50 PM
 *
 * i costruttori si ereditano, ma non vengono chiamati in automatico
 */

 class P {
     public function __construct() {
         echo __CLASS__."\n";
 }
 }

 class A extends P {

 }

 class B extends P {
     public function __construct() {
         echo __CLASS__."\n";
         parent::__construct();//se tolgo questa chiamata, il costruttore del padre NON
                               //viene chiamato
     }

 }

 $a = new A(); //stampa P - il contruttore del padre viene chiamato
 $b = new B(); //stampa B e poi P

 /*
  * :::::::::::: ora private
  */
    class P1 {
        private function __construct() {
            echo __CLASS__."\n";
        }
    }

    class A1 extends P1 {

    }

    class B1 extends P1 {
        public function __construct() {
            echo __CLASS__."\n";
            parent::__construct(); //PHP Fatal error:  Cannot call private P1::__construct()
        }

    }

    //$a = new A1(); //PHP Fatal error:  Call to private P1::__construct() from invalid context
    //$b = new B1(); //fatal error

class P2 {
    private function __construct() {
        echo __CLASS__."\n";//NON viene chiamato quando si inizializza A2
    }
}

class A2 extends P2 {
    public function __construct() {
        echo __CLASS__."\n";
    }
}


$a = new A2(); //A2
