<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/3/14
 * Time: 3:07 PM
 *
 * le costanti di classi non sono ovviamente modificabili
 * e si definiscono senza usare il $ l'inizializzazione va fatto con usa costante, nemmeno
 * col risultato di una funzione o un calcolo matematico.
 * le interfacce non possono avere costanti
 */

 class A {
     const COSTANTE = 10;

     function parla() {
         echo self::COSTANTE,"\n";
         echo A::COSTANTE,"\n";
         echo static::COSTANTE,"\n";
         //echo parent::COSTANTE,"\n";...è l'unica che da errore, perchè non ha un parent
     }
 }

 echo A::COSTANTE,"\n";
 $a = "A";
 echo $a::COSTANTE,"\n";
 $a = new A;
 echo $a::COSTANTE,"\n";
 $a->parla();

 /*
  * tutte rispondono 10
  */