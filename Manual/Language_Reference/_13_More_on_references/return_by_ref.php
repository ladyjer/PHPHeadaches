<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/21/14
 * Time: 10:49 PM
 */

 class a {
     private $x = 10;

     function &getValue() {
        //return ($this->x);//PHP Notice:  Only variable references should be returned by reference
        return $this->x;
     }
 }

 $a = new a();
 //echo $a->x;    //PHP Fatal error:  Cannot access private property a::$x
 $x = $a->getValue();
 $x++;
 echo $a->getValue(),PHP_EOL;//10 -  non è sufficiente che ci sia nella definizione della funzione la &

 $x =& $a->getValue();
 $x++;
 echo $a->getValue(),PHP_EOL;//11
/*
Note: If you try to return a reference from a function with the syntax: return ($this->value);
this will not work as you are attempting to return the result of an expression, and not a variable,
by reference. You can only return variables by reference from a function - nothing else.
Since PHP 4.4.0 in the PHP 4 branch, and PHP 5.1.0 in the PHP 5 branch,
an E_NOTICE error is issued if the code tries to return a dynamic expression or a result of the new operator.
here you have to use & in both places -
to indicate that you want to return by reference, not a copy,
and to indicate that reference binding, rather than usual assignment, should be done for $myValue.
 */

 function &x() {
     return new a();
 }

 $r = x(); //PHP Notice:  Only variable references should be returned by reference
 echo $r->getValue();//10
