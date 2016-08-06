<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/13/14
 * Time: 6:03 PM
 */

 /*
  * Se uno degli operatori è float, il risultato di + sarà float
  * altrimenti gli operatori verranno interpretati come integer
  * e il risultato sarà integer
  */

 $a = '1.0';
 $b = 2;
 var_dump($a+$b); //double(3)

 $a = '1';
 $b = 2;
 var_dump($a+$b); //int(3)

 $a = '1.0 litri di latte';
 $b = 2;
 var_dump($a+$b); //double(3)

 $a = 'litri di latte 1.0';
 $b = 2;
 var_dump($a+$b); //int(2)

 $a = 'litri di latte 1.0';
 $b = 2.0;
 var_dump($a+$b); //double(2)

 $a = 45;
 var_dump((boolean)$a);//bool(true)
 $a = true;
 var_dump((int)$a);//int(1)

 /*
  * "binary string" is what we have in php right now - a sequence of bytes,
  * which (as opposed to C language) can also include nul byte.
  * This is (or will be, as of php6) different from unicode strings, which are sequences of two-byte characters.
  */
 $binary = (binary) "ciao";
 var_dump($binary);//string(4) "ciao"
 $binary = "ciao";
 var_dump($binary);//string(4) "ciao"
 //non cambia nulla, per ora
