<?php
/**
 * Created by IntelliJ IDEA.
 * User: ColomboM
 * Date: 24/09/14
 * Time: 15.55
 */


function foo() {
    global $color;
    $a = include 'inc_req_2.php';
    var_dump($a); ////int(1)
    echo "A $color $fruit\n";
}

foo();
//echo "A $color $fruit";//Notice: Undefined variable: fruit
echo @"A $color $fruit\n";

 /** quando si include un file, il parsing passa da modalità php a modalità
  * html all'inizio del file incluso. e' per questo che il codice in questi file
  * deve essere incluso nei tag php, altrimenti verrebbe scritto in chiaro a video
  */

 $xx = include('ciao.txt');
 echo "\n";
 var_dump($xx);  //int(1)

/*
int(1)
A red banana
A red
sono il contenuto del file ciao.txt
int(1)
 */

/** se nel file incluso ci sono funzioni, queste possono essere usate dal
 * file chiamante, anche se ne chiamato sono dopo il return
 */