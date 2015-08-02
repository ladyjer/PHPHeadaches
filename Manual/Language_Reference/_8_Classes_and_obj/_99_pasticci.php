<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 23/03/15
 * Time: 11.32
 */
class A {
    public static $sta;

    private function __construct() {

    }

    public function A() {
         echo __METHOD__;
    }

    public function Z() {

    }

    /*public function Z($a)//PHP Fatal error:  Cannot redeclare A::Z() in
    {

    }*/
}

$a = 'A';
$a::$sta = 1;
echo A::$sta,"\n";//1

//nota bene, da errore anche se estiste l'altro costruttore "vecchio stile" public
//$b = new A();//PHP Fatal error:  Call to private A::__construct() from invalid context in
@$b::$sta = 1;//PHP Notice:  Undefined variable: b
              //PHP Fatal error:  Class name must be a valid object or a string
echo "..";//non stampa