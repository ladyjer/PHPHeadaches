<?php
/**
 * globals.php
 *
 * PHP version 5
 *
 * @category   Joomla_Components
 * @package    Joomla.Administrator
 * @subpackage Com_Arxivar
 * @author     Mariella Colombo <mariella.colombo@ladyj.eu>
 * @copyright  Copyright © 2016 Colombo Mariella
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://www.ladyj.eu
 */
$a = 2;

var_dump($GLOBALS['a']);//int 2
var_dump($GLOBALS);
/*
array (size=9)
  '_GET' =>
    array (size=1)
      '_ijt' => string '840iuurchhoepns2878kcl2skv' (length=26)
  '_POST' =>
    array (size=0)
      empty
  '_COOKIE' =>
    array (size=2)
      'name1' => string 'value1' (length=6)
      'Idea-2130b3f' => string '4f1969b7-763e-4960-8bc6-4551f2c88666' (length=36)
  '_FILES' =>
    array (size=0)
      empty
  '_SERVER' =>
    array (size=32)
      'HTTP_HOST' => string 'localhost' (length=9)
      'HTTP_USER_AGENT' => string 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:48.0) Gecko/20100101 Firefox/48.0' (length=76)
      'HTTP_ACCEPT' => string 'text/html,application/xhtml+xml,application/xml;q=0.9,\*\/\*;q=0.8' (length=63)
      'HTTP_ACCEPT_LANGUAGE' => string 'en-US,en;q=0.5' (length=14)
      'HTTP_ACCEPT_ENCODING' => string 'gzip, deflate' (length=13)
      'HTTP_COOKIE' => string 'name1=value1; Idea-2130b3f=4f1969b7-763e-4960-8bc6-4551f2c88666' (length=63)
      'HTTP_CONNECTION' => string 'keep-alive' (length=10)
      'HTTP_UPGRADE_INSECURE_REQUESTS' => string '1' (length=1)
      'HTTP_CACHE_CONTROL' => string 'max-age=0' (length=9)
      'PATH' => string '/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin' (length=60)
      'SERVER_SIGNATURE' => string '<address>Apache/2.4.7 (Ubuntu) Server at localhost Port 80</address>
' (length=69)
      'SERVER_SOFTWARE' => string 'Apache/2.4.7 (Ubuntu)' (length=21)
      'SERVER_NAME' => string 'localhost' (length=9)
      'SERVER_ADDR' => string '127.0.0.1' (length=9)
      'SERVER_PORT' => string '80' (length=2)
      'REMOTE_ADDR' => string '127.0.0.1' (length=9)
      'DOCUMENT_ROOT' => string '/var/www/html' (length=13)
      'REQUEST_SCHEME' => string 'http' (length=4)
      'CONTEXT_PREFIX' => string '' (length=0)
      'CONTEXT_DOCUMENT_ROOT' => string '/var/www/html' (length=13)
      'SERVER_ADMIN' => string 'webmaster@localhost' (length=19)
      'SCRIPT_FILENAME' => string '/var/www/html/phpcert/Manual/Language_Reference/_3_Variabili/globals.php' (length=72)
      'REMOTE_PORT' => string '47027' (length=5)
      'GATEWAY_INTERFACE' => string 'CGI/1.1' (length=7)
      'SERVER_PROTOCOL' => string 'HTTP/1.1' (length=8)
      'REQUEST_METHOD' => string 'GET' (length=3)
      'QUERY_STRING' => string '_ijt=840iuurchhoepns2878kcl2skv' (length=31)
      'REQUEST_URI' => string '/phpcert/Manual/Language_Reference/_3_Variabili/globals.php?_ijt=840iuurchhoepns2878kcl2skv' (length=91)
      'SCRIPT_NAME' => string '/phpcert/Manual/Language_Reference/_3_Variabili/globals.php' (length=59)
      'PHP_SELF' => string '/phpcert/Manual/Language_Reference/_3_Variabili/globals.php' (length=59)
      'REQUEST_TIME_FLOAT' => float 1470573424.334
      'REQUEST_TIME' => int 1470573424
  '_REQUEST' => 
    array (size=1)
      '_ijt' => string '840iuurchhoepns2878kcl2skv' (length=26)
  '_ENV' => 
    array (size=0)
      empty
  'GLOBALS' => 
    &array
  'a' => int 2
 */
 	?>