<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 01/11/14
 * Time: 15.36
 *
 * public Closure Closure::bindTo ( object $newthis [, mixed $newscope = "static" ] )
 *
 * The “bound object” determines the value $this will have in the function body and the “class scope”
 * represents a class which determines which private and protected members
 * the anonymous function will be able to access.
 * Namely, the members that will be visible are the same as if the anonymous function
 * were a method of the class given as value of the newscope parameter.
 *
 * Static closures cannot have any bound object
 * (the value of the parameter newthis should be NULL),
 * but this function can nevertheless be used to change their class scope.
 *
 * Non-static closures that are given a scope but a NULL instance are made static
 * Non-static non-scoped closures that are given a non-null instance
 * are scoped to an unspecified class
 */
 class A {
     private $a = 10;
     static function saluta() {
         echo __METHOD__,PHP_EOL;
     }
 }

 $c = function() {
    $this->a = 100;
 };

 $a = new A();
 /* 1.
  * Non-static non-scoped closures that are given a non-null instance
  * are scoped to an unspecified class.
  */
 $x = $c->bindTo($a);
 //$x();//PHP Fatal error:  Cannot access private property A::$a

 $x = $c->bindTo($a, 'A');
 $x();
 var_dump($a);
/*** ho modificato il valore di una variabile privata
object(A)#2 (1) {
["a":"A":private]=>
  int(100)
}
*/
 $cl1 = static function() {
    static::saluta();
 };
 $x = $cl1->bindTo($a);//PHP Warning:  Cannot bind an instance to a static closure
//$x();//PHP Fatal error:  Call to undefined method Closure::saluta()
 $x = $cl1->bindTo($a,'A');//PHP Warning:  Cannot bind an instance to a static closure
 $x();//A::saluta();




