<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/26/14
 * Time: 3:53 PM
 */
 $e = new Exception('A prescindere', -90, new Exception('Quella prima'));
 echo $e->getPrevious(),PHP_EOL; //se non c'è una eccezione, NULL
/*
exception 'Exception' with message 'Quella prima' in /var/www/PHPCert/Manual/Language_Reference/Exceptions/new2.php:8
Stack trace:
#0 {main}
 */
 $x = $e->getPrevious();
 echo $x, PHP_EOL;
/*
exception 'Exception' with message 'Quella prima' in /var/www/PHPCert/Manual/Language_Reference/Exceptions/new2.php:8
Stack trace:
#0 {main}
 */
 echo $x->getMessage(),PHP_EOL;//Quella prima
 echo $x->__toString(), PHP_EOL;
 /*
exception 'Exception' with message 'Quella prima' in /var/www/PHPCert/Manual/Language_Reference/Exceptions/new2.php:8
Stack trace:
#0 {main}
  */

  /*
   * final public mixed Exception::getCode ( void )
   */