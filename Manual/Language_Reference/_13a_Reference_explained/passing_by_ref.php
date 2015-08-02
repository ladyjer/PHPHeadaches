<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/14/14
 * Time: 10:18 PM
 */

 function foo(&$x) {
     $x++;
     echo $x . "\n";
 }

 function boo() {
     $a = 10;
     return $a;
 }

 foo(boo());//funziona