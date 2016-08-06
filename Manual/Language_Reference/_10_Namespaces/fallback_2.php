<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/16/14
 * Time: 10:41 PM
 */

 namespace pazzo;

 function strlen($s) {
     return \strlen($s)+4;
 }

 namespace pezzo;

 echo \pazzo\strlen('ciao');//8
 echo \strlen('ciao');      //4