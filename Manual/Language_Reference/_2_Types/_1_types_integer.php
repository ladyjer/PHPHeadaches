<?php
 $d = 123;
 $o = 07; //octal number
 $e = 0xA; //hexadecimal number
 $b = 0b11; //binary number

 echo PHP_INT_SIZE . "\n";
 echo PHP_INT_MIN . ' <-> ' . PHP_INT_MAX;//-9223372036854775808 <-> 9223372036854775807
 /*
  * PHP_INT_MIN introduced with PHP 7
  */

 /*
  * $error = 0b7; // PHP Parse error:  syntax error, unexpected 'b7' (T_STRING)
  */
 //$error = 08;//PHP Parse error:  Invalid numeric literal (with PHP 7)
 echo "Value : " . $error, "\n"; //with PHP 5 value : 0

 /*
  * If PHP encounters a number beyond the bounds of the integer type,
  * it will be interpreted as a float instead. Also, an operation which
  * results in a number beyond the bounds of the integer type
  * will return a float instead.
  */
 if (is_double(PHP_INT_MAX+1)) echo "It's double!\n";

 echo gettype(10/2), "\n"; //integer
 echo gettype(10/3), "\n"; //double

 /*
  * If a resource is converted to an integer,
  * then the result will be the unique resource number assigned to the resource by PHP at runtime.
  *
  * When converting from float to integer, the number will be rounded towards zero.
  *
  * Casting a boolean to int: true->1 false->0
  */

 echo (int) (PHP_INT_MAX+1), "\n";//-9223372036854775808 (it' PHP_INT_MIN!)

 echo (int) ((0.1 + 0.7) * 10), "\n"; //7! -- Never cast an unknown fraction to integer, as this can sometimes lead to unexpected results.

 echo (int) (3.7), "\n"; //3
 echo round(3.7); //4