<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/18/14
 * Time: 10:43 PM
 *
 *
 * $a & $b and
 * $a ! $b or
 * $a ^ $b xor
 * ~$a NOT
 * $a << &b  shift left
 * $a >> &b  shift right
 *
 * se gli operatori sono strighe, gli operatori vengono applicati ai valori ascii, e il risultato sarà stringa
 * in tutti gli altri casi gli operatori verranno convertiti in interi e il risultato sarà intero
 */

 $a = -1;
 $a = $a << 2;
 var_dump($a);//int(-4)
 var_dump(decbin(-1));//string(64) "1111111111111111111111111111111111111111111111111111111111111111" ---sono stringhe perchè
 var_dump(decbin(-4));//string(64) "1111111111111111111111111111111111111111111111111111111111111100" ---decbin restituisce una stringa

 /*
  * E_ALL & ~E_NOTICE è uguale a E_ALL ^ E_NOTICE .... E_ALL che non sono E_NOTICE (XOR)
  */

