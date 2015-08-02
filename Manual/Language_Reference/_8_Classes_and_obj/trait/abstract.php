<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/10/14
 * Time: 4:18 PM
 *
 * I trait possono avere anche metodi astratti
 *
 */

 trait A {
     abstract function parla();
 }

 abstract class Fumagalli {
     use A;
 }

 class Giulia extends Fumagalli {
     function parla($x = 0) {
         echo $x;
     }
 }

 $g = new Giulia();
 $g->parla();//0