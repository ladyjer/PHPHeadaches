<?php

 class mamma {
     protected $x;

     public function nome(&$i) {
         $i++;
         $this->x = 'Mamma ' . $i;
     }

     public function parla() {
         echo $this->x, "\n";
     }
 }

 class giulia extends mamma {
     public function nome(&$i) {
         $i += 2;
         $this->x = 'Giulia ' . $i;
     }
 }

 /*
  * mixed call_user_func ( callable $callback [, mixed $parameter [, mixed $... ]] )
  *
  * Callbacks can be denoted by callable type hint as of PHP 5.4.
  * This documentation used callback type information for the same purpose.
  * Some functions like call_user_func() or usort() accept user-defined callback
  * functions as a parameter. Callback functions can not only be simple functions,
  * but also object methods, including static class methods.
  * A PHP function is passed by its name as a string. Any built-in or user-defined
  * function can be used, except language constructs such as: array(), echo, empty(), eval(),
  * exit(), isset(), list(), print or unset().
  * A method of an instantiated object is passed as an array containing
  * an object at index 0 and the method name at index 1.
  * Static class methods can also be passed without instantiating an object
  * of that class by passing the class name instead of an object at index 0. As of PHP 5.2.3,
  * it is also possible to pass 'ClassName::methodName'.
  * Apart from common user-defined function, anonymous functions can also be passed to a callback parameter (closure).
  *
  * >>>>> ATTENZIONE! Note that the parameters for call_user_func() are not passed by reference.
  * se passo per reference da un warning
  *
    error_reporting(E_ALL);
    function increment(&$var)
    {
        $var++;
    }

    $a = 0;
    call_user_func('increment', $a);
    echo $a."\n";//0

    // You can use this instead
    call_user_func_array('increment', array(&$a));
    echo $a."\n";//1

*/
 $g = new giulia();

 call_user_func(array($g, "nome"), 10);
 echo "0 .";
 $g->parla(); //Giulia 12
 call_user_func(array($g, "parent::nome"), 10);
 echo "1 .";
 $g->parla(); //Mamma 11

 $g = new giulia();
 $i = 10;
 call_user_func(array($g, "nome"), $i);//PHP Warning:  Parameter 1 to giulia::nome() expected to be a reference
 //a causa del warning, $g->x resta null
 echo "2 .";
 $g->parla(); //null, non stampa niente a causa del warning
 //$i = 10
 call_user_func_array(array($g, "parent::nome"), array(&$i));
 echo "3 .";
 $g->parla(); //Mamma 11
 //$i = 11


