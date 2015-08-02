<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 01/11/14
 * Time: 15.16
 *
 * Anonymous functions, implemented in PHP 5.3, yield objects of this type.
 */

 $x = function() {
     echo 'ciao';
 };

 var_dump($x);
/*
object(Closure)#1 (0) {
}
 */

 /*
public static Closure Closure::bind ( Closure $closure , object $newthis [, mixed $newscope = "static" ] )
Closure::bind — Duplicates a closure with a specific bound object and class scope
This method is a static version of Closure::bindTo().

Parameters
closure
    The anonymous functions to bind.
newthis
    The object to which the given anonymous function should be bound, or NULL for the closure to be unbound.
newscope
    The class scope to which associate the closure is to be associated, or 'static' to keep the current one.
    If an object is given, the type of the object will be used instead.
    This determines the visibility of protected and private methods of the bound object.

Return Values
Returns a new Closure object or FALSE on failure

  */

class A {
    private static $fooS = 1;
    private $foo = 1000;
    public static function saluta() {
        echo __METHOD__,PHP_EOL;
    }
}

class B {
    private static $fooS = 2;
    private $foo = 2000;
    public static function saluta() {
        echo __METHOD__,PHP_EOL;
    }
}

$cl1 = function() {
   return $this->foo;
};

$cl2 = static function() {
   static::saluta();
   /*
    * Se mettessi A::saluta() nei due casi sotto stamperebbe sempre A::saluta
    */
};

$a = new A();
$ncl1 = Closure::bind($cl1, $a, 'A');
echo $ncl1(),PHP_EOL;//1000
$ncl1 = Closure::bind($cl1, $a, 'B');
//echo $ncl1(),PHP_EOL;//PHP Fatal error:  Cannot access private property A::$foo
$ncl2 = Closure::bind($cl2, null, 'A');
$ncl2();//A::saluta
$ncl2 = Closure::bind($cl2, null, 'B');
$ncl2();//B::saluta