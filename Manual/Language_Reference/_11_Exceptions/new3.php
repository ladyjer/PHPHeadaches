<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/26/14
 * Time: 4:19 PM
 *
 * Le eccezioni non si possono CLONARE, da FATAL ERROR
 */

 function ciao($a, $b = 10) {
     throw new Exception('Ciao', -99);
 }

 function cippa() {
     ciao(10);
 }

 try {
     cippa();
 } catch (Exception $x) {
     var_dump($x->getTrace());
     echo $x->getTraceAsString(),PHP_EOL;
     echo $x->__toString(),PHP_EOL;
 }

/*
 * Two important points about this function which are not documented:
 * 1) The trace does not include the file / line at which the exception is thrown;
 * that entry is only recorded in the top-level getFile/Line methods.
 * 2) Elements are returned in 'closest-first' order, e.g. if you have a
 * script x which calls function y which calls function z which throws an
 * exception, then the first trace element will be 'Y' and the second will be 'X'.
 *
array(2) {
  [0]=>
  array(4) {
    ["file"]=>
    string(62) "/var/www/PHPCert/Manual/Language_Reference/Exceptions/new3.php"
    ["line"]=>
    int(14)
    ["function"]=>
    string(4) "ciao"
    ["args"]=>
    array(1) {
      [0]=>
      int(10)
    }
  }
  [1]=>
  array(4) {
    ["file"]=>
    string(62) "/var/www/PHPCert/Manual/Language_Reference/Exceptions/new3.php"
    ["line"]=>
    int(18)
    ["function"]=>
    string(5) "cippa"
    ["args"]=>
    array(0) {
    }
  }
}
 *
 *
 * #0 /var/www/PHPCert/Manual/Language_Reference/Exceptions/new3.php(14): ciao(10)
 * #1 /var/www/PHPCert/Manual/Language_Reference/Exceptions/new3.php(18): cippa()
 * #2 {main}
 *
 *
 * exception 'Exception' with message 'Ciao' in /var/www/PHPCert/Manual/Language_Reference/Exceptions/new3.php:10
 * Stack trace:
 * #0 /var/www/PHPCert/Manual/Language_Reference/Exceptions/new3.php(14): ciao(10)
 * #1 /var/www/PHPCert/Manual/Language_Reference/Exceptions/new3.php(18): cippa()
 * #2 {main}
 */