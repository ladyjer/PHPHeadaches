<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/14/14
 * Time: 7:40 PM
 */
 $baz = 100;
 $bar = 99;

 function foo(&$x) {
     $x =& $GLOBALS['baz'];
 }

 foo($bar);
 var_dump($bar);//int(99)

 /*
  * Questo perchè in foo, $x è solo un alias di $bar e viene ri-collocato
  * facendolo diventare un alias di $baz. nulla succede alla global $bar
  * non c'è modo di far diventare $bar un alias di qualcos'altro usando i
  * passaggi by reference
  */