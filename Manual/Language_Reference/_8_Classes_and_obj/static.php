<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/10/14
 * Time: 12:38 PM
 *
 * Declaring class properties or methods as static makes them accessible without needing
 * an instantiation of the class. A property declared as static cannot be accessed with
 * an instantiated class object (though a static method can).

For compatibility with PHP 4, if no visibility declaration is used, then the property
 * or method will be treated as if it was declared as public.

Because static methods are callable without an instance of the object created,
 * the pseudo-variable $this is not available inside the method declared as static.

Static properties cannot be accessed through the object using the arrow operator ->.

Calling non-static methods statically generates an E_STRICT level warning.

Like any other PHP static variable, static properties may only be
 * initialized using a literal or constant; expressions are not allowed.
 * So while you may initialize a static property to an integer or array (for instance),
 * you may not initialize it to another variable, to a function return value, or to an object.

As of PHP 5.3.0, it's possible to reference the class using a variable.
 * The variable's value cannot be a keyword (e.g. self, parent and static).
 */


/*
 * IMPORTANTE:
 * Static properties cannot be accessed through the object using the arrow operator ->
 * A property declared as static cannot be accessed with an instantiated class object
 * (though a static method can).
 */

 class A {
     public static $ciao = "ciao";
     public $paese = 'Italia';

     public static function hallo() {
          echo __METHOD__,PHP_EOL;
          //echo $this->paese;//PHP Fatal error:  Using $this when not in object context
     }

     public function saluta() {
         echo "----------------------------",PHP_EOL;
         echo self::$ciao, PHP_EOL;//Ciao
         echo $this->ciao, PHP_EOL;//PHP Notice:  Undefined property: A::$ciao
                                   //Strict standards: Accessing static property A::$ciao as non static
         echo $this::$ciao, PHP_EOL;//Ciao
         echo "----------------------------",PHP_EOL;
     }
 }

 $a = new a();
 $a->saluta();

 echo A::$ciao,PHP_EOL;//ciao
 echo $a->ciao,PHP_EOL;//PHP Notice:  Undefined property: A::$ciao
                       //Strict standards: Accessing static property A::$ciao as non static
 echo $a::$ciao,PHP_EOL;//ciao

 A::hallo();//ok  A::hallo
 $a->hallo();//ok A::hallo

 $x = 'A';
 $x::hallo();//ok A::hallo
 echo $x::$ciao;//ciao senza problemi

