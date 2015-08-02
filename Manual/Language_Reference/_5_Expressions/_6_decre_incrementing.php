<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/19/14
 * Time: 10:41 PM
 */

 /* su array oggetti e references non ha effetto */
 $a = array(1);
 $a++;
 var_dump($a);
/*
 * array(1) {
  [0]=>
  int(1)
}
 */

 $a = NULL;
 $a--;
 var_dump($a);//NULL -----attenzione! Anche sotto. Il decremento non ha effetto!
 $a++;
 var_dump($a);//int(1)!!!!

 $a = 'ciao';
 $a++;
 var_dump($a); //string(4) "ciap"
 $a = 'Z';
 $a++;
 var_dump($a); //string(2) "AA"
 $a--;
 var_dump($a); //string(2) "AA" ... IL DECREMENTO NON HA EFFETTO
 /*
  * con le strighe viene supportato solo i caratteri ASCII plain a-z A-Z 0-9
  */

 /*
  * ATTENZIONE! A99 -> A100 NO!...  il numero di numeri resta fisso dopo il decremento.
  * quello che va avanti sono le lettere.
  * E' come con le letterine del salumiere
  */

 $a = 'A99';
 $a++;
 var_dump($a);//B00
 $a = 'A999';
 $a++;
 var_dump($a);//B000
 $a = 'A998';
 $a++;
 var_dump($a);//A999
 $a = "Z99";
 $a++;
 var_dump($a);//AA00
 $a = "Z";
 $a++;
 var_dump($a);//AA
 $a = "999";
 $a++;
 var_dump($a);//int(1000) ..... <-- CASTING AUTOMATICO


