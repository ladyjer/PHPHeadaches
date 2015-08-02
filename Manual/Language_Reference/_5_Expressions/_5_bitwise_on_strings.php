<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/19/14
 * Time: 3:23 PM
 */

 /*
  * se entrambi gli operatori sono stringhe allora
  * i bitwise si applicano ai valori ascii delle lettere.
  * alrimenti vengono ricondotti a interi
  */

 $a = "a"; //int(97)
 $b = "b"; //int(98)

 var_dump(ord($a));
 var_dump(ord($b));
 var_dump(decbin(ord($a)));//string(7) "1100001"
 var_dump(decbin(ord($b)));//string(7) "1100010"
 var_dump(decbin(97 ^ 98));//string(2) "11"
 var_dump(chr(bindec(11)));//string(1) ""


 $c = $a ^ $b;
 var_dump($c);           //string(1) "" ... stesso di sopra

 echo "2" ^ 3, "\n"; //1
 /*
  * Perchè è come 2 ^ 3 -> 10 ^ 11 -> 01
  */
 $x = "ciao";
 $y = "mi";
 $z = "ciao" ^ "mi";
 echo "....{$z}....\n";
 echo "....".ord($z)."....\n"; //14
 for ($i = 0; $i < strlen($x); $i++) {
     echo "{$x[$i]}  (".decbin(ord($x[$i])).") : {$y[$i]}  (".decbin(ord($y[$i])).")\n";//line 39
 }
/*
c  (1100011) : m  (1101101)
i  (1101001) : i  (1101001)
a  (1100001) :   (0)
o  (1101111) :   (0)
PHP Notice:  Uninitialized string offset: 2 in /var/www/PHPCert/Manuale/Espressioni/bitwise_on_strings.php on line 39
PHP Notice:  Uninitialized string offset: 2 in /var/www/PHPCert/Manuale/Espressioni/bitwise_on_strings.php on line 39
PHP Notice:  Uninitialized string offset: 3 in /var/www/PHPCert/Manuale/Espressioni/bitwise_on_strings.php on line 39
PHP Notice:  Uninitialized string offset: 3 in /var/www/PHPCert/Manuale/Espressioni/bitwise_on_strings.php on line 37

QUINDI

c  (1100011) : m  (1101101) --> 0001110 --> 8 + 4 + 2 = 14
i  (1101001) : i  (1101001) --> 0000000 --> il codice ascii 0 non esiste
a  (1100001) :   (0)        --> 0000000 di default
o  (1101111) :   (0)        --> 0000000 di default   con xor si prende la + corta delle due

*/

$z = "ciao" & "mi";
echo "....{$z}....\n";        //ai
echo "....".ord($z)."....\n"; //97 ... solo del primo carattere
/*
c  (1100011) : m  (1101101) --> 1100001 --> è la a
i  (1101001) : i  (1101001) --> 1101001 --> è la i
a  (1100001) :   (0)        --> 0000000 di default
o  (1101111) :   (0)        --> 0000000 di default con & si prende la + corta delle due
 */

$z = "ciao" | "mi";
echo "....{$z}....\n";        //oiao
echo "....".ord($z)."....\n"; //111 ... solo del primo carattere
/*
c  (1100011) : m  (1101101) --> 1101111 --> è la o
i  (1101001) : i  (1101001) --> 1101001 --> è la i
a  (1100001) :   (0)        --> 1100001 --> è la a
o  (1101111) :   (0)        --> 1101111 --> è la o con | si prende la + lunga delle due
 */

