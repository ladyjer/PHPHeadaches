<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/24/14
 * Time: 2:16 PM
 *
 *
 * The GET variables are passed through urldecode().
 */

 var_dump($_GET);  //con script non funziona

 //http://localhost/PHPCert/Manual/Language_Reference/Predef_variables/
 //get.php?ciao=mamma&figli[]=giulia&figli[]=lucia&x=primo&x=secondo
/*
array (size=3)
  'ciao' => string 'mamma' (length=5)
  'figli' =>
    array (size=2)
      0 => string 'giulia' (length=6)
      1 => string 'lucia' (length=5)
  'x' => string 'secondo' (length=7)
    */