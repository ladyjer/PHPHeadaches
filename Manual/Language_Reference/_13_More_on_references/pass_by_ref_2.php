<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/21/14
 * Time: 10:45 PM
 *
/*
Variables, i.e. foo($a)
New statements, i.e. foo(new foobar())
References returned from functions, i.e.:
 */

 function a(&$a) {
     $a++;
     echo $a,PHP_EOL;
 }

 function &b() {
     return $a; //Nessun NOTICE
 }

 function c() {
    return $a; //PHP Notice:  Undefined variable: a
 }


 a(b());//1
 a(c());//1 - da notare che funzion lo stesso, anche se non c'e &
