<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/26/14
 * Time: 4:50 PM
 */

class ErrorException extends Exception {
    /* Properties */
    protected int $severity ;
/* Inherited properties */
protected string $message ;
protected int $code ;
protected string $file ;
protected int $line ;
/* Methods
 *
 * COSTRUTTORE
 */
public __construct ([ string $message = "" [,
                       int $code = 0 [,
                         int $severity = 1 [,
                            string $filename = __FILE__ [,
                               int $lineno = __LINE__ [,
                                 Exception $previous = NULL ]]]]]] )
 /*
  *
  *
  *
  */
final public int getSeverity ( void )
/* Inherited methods */
final public string Exception::getMessage ( void )
final public Exception Exception::getPrevious ( void )
final public mixed Exception::getCode ( void )
final public string Exception::getFile ( void )
final public int Exception::getLine ( void )
final public array Exception::getTrace ( void )
final public string Exception::getTraceAsString ( void )
public string Exception::__toString ( void )
final private void Exception::__clone ( void )
}