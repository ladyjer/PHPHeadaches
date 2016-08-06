<?php
/**
 * Created by IntelliJ IDEA.
 * User: ColomboM
 * Date: 17/09/14
 * Time: 16.39
 */
 $a = 4;
 $b = $a++;
 var_dump($a);//int(5)
 var_dump($b);//int(4)

 $b = ++$a;
 var_dump($a);//int(6)
 var_dump($b);//int(6)

 /*
  * un operatore prende due o più valori e ne ottine un altro valore
  * DAL PHP 5.6 esiste l'operatore di POTENZA **
  */
 ////io uso 5.5.9 e non ce l'ho ma è così --> $a = 4 ** 2;

 var_dump(4/2); //int(2)
 /*** c'è un po' di caciara qui */
 $d = 4.0/2;
 var_dump($d); //double(2)
 var_dump(gettype($d)); //string(6) "double"
 /** comunque il / restituisce sempre un double, a meno che gli operators siano interi
  * e divisibili tra loro
  */

