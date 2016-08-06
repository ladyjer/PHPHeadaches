<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/9/14
 * Time: 9:37 PM
 */
 echo PHP_INT_SIZE, "\n", PHP_INT_MAX, "\n"; //8 9223372036854775807
 $a = PHP_INT_MAX + 1;  //
 var_dump($a);  //double(9.2233720368548E+18)
 $a = (int)(PHP_INT_MAX + 1); //>> PHP_INT_MAX
 var_dump($a); //int(-9223372036854775808) un numero unpredictable, il valore è float e viene forzato a int
 $a = (string)(PHP_INT_MAX + 1);
 var_dump($a);  //string(19) "9.2233720368548E+18"
 $a = 99999.0 + "9.2233720368548E+18";
 var_dump($a);  //double(9.2233720368549E+18)

 $x = 1 + ("10.4 euro"); var_dump($x);   //double(11.4)
 $x = 1 + ("ho 10.4 euro"); var_dump($x);//int(1)
 $x = 1.0 + ("ho 10.4 euro"); var_dump($x);//double(1)

 var_dump(gettype($x));//string(6) "double"
 //Ord Return ASCII value of character. Returns the ASCII value of the first character of string.
 var_dump(ord('A')); //int(65)
//Returns a one-character string containing the character specified by ascii.
 var_dump(chr(65));//string(1) "A"
 echo decoct(65),"\n";//101
 echo "Ciao \101","\n";//Ciao A
 echo dechex(ord('A')),"\n";//41
 echo "Ciao \x41","\n";//Ciao A
 ///l'encoding delle stringhe sopra è lo stesso nel quale è scritto lo script ISO-8859-1/UTF-8 etc
 ///ma questo NON se zend multibute è abilitato, in questo caso verrà usato un encoding interno che prescinde
 ///da quello del script, che verrà dichiarato o detected


