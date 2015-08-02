<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/26/14
 * Time: 3:46 PM
 */

 /*
  * public Exception::__construct ([ string $message = "" [, int $code = 0 [, Exception $previous = NULL ]]] )
  * 2o e 3o parametro opzionali: codice e prevoious message
  */
 try {
     throw new Exception('A prescindere', -90, new Exception('Quella prima')); //Linea 14
 } catch (Exception $e) {
     echo $e->getFile(),PHP_EOL; ///var/www/PHPCert/Manual/Language_Reference/Exceptions/new.php
     echo $e->getLine(),PHP_EOL; //14 - Get line number where the exception was created.
     //echo $e->getTrace(),PHP_EOL; //Array - final public array Exception::getTrace ( void )
 }

 /*
PHP Fatal error:  Uncaught exception 'Exception' with message 'Quella prima' in /var/www/PHPCert/Manual/Language_Reference/Exceptions/new.php:9
Stack trace:
#0 {main}

Next exception 'Exception' with message 'A prescindere' in /var/www/PHPCert/Manual/Language_Reference/Exceptions/new.php:9
Stack trace:
#0 {main}
  thrown in /var/www/PHPCert/Manual/Language_Reference/Exceptions/new.php on line 9
  */