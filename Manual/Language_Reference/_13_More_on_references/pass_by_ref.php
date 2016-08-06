<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/21/14
 * Time: 10:42 PM
 *
 * Note: There is no reference sign on a function call - only on function definitions.
 * Function definitions alone are enough to correctly pass the argument by reference.
 * As of PHP 5.3.0, you will get a warning saying that "call-time pass-by-reference"
 * is deprecated when you use & in foo(&$a);. And as of PHP 5.4.0,
 * call-time pass-by-reference was removed, so using it will raise a fatal error.
 */

 function ciao(&$a) {
     $a++;
     echo $a,PHP_EOL;
 }

 ciao($b);//1
 ciao(&$b);//PHP Fatal error:  Call-time pass-by-reference has been removed


