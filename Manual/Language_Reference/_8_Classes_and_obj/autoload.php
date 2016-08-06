<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/3/14
 * Time: 3:36 PM
 */

 $a = new A();//(con prima versione autoload)PHP Fatal error:  Class 'A' not found
              //con seconda versione: Ci sono!
 try {
     $c = "CICCIA";
     $x = new $c(); //(con prima versione autoload)PHP Fatal error:  Class 'CICCIA' not found
 } catch (Exception $e) {
     echo $e->getMessage();//con le seconda versione: Non trovo CICCIA
 }

 /*function __autoload($classname) {
    echo $classname."\n";  //stampa A e CICCIA
 } */

 function __autoload($c) {
    if ($c == 'A') {
        include_once('./auto/a.php');
    } else {
        throw new Exception("Non trovo {$c}\n");
    }
 }

