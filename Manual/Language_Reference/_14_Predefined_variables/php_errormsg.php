<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/24/14
 * Time: 3:33 PM
 */
 ini_set('track_errors', 1);
 @strpos();
 // This variable will only be available within the scope
 //in which the error occurred, and only if the track_errors configuration option is turned on (it defaults to off).
 //con track_errors Off:
 //echo $php_errormsg;//PHP Notice:  Undefined variable: php_errormsg in
 //con track_errors On:
 echo "..." . $php_errormsg; //sembra non venire popolata se c'è xdebug
 //su ladyj  : strpos() expects at least 2 parameters, 0 given


