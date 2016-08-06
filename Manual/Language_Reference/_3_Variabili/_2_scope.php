<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/13/14
 * Time: 10:25 PM
 */

 $a = 1;

 function echomine() {
     echo $GLOBALS['a']."\n";
 }

 var_dump($GLOBALS);
/**
array (size=9)
'_GET' =>
array (size=0)
empty
'_POST' =>
array (size=0)
empty
'_COOKIE' =>
array (size=9)
'__atuvc' => string '4|47' (length=4)
'ja_elastica_tpl' => string 'ja_elastica' (length=11)
'7cc92d763a31ffb85e79f7cc95a3d712' => string 'skmm2ru7eah674naisv4qsbhn0' (length=26)
'b6d64657a200358259060f7c18462154' => string 'v9d3oerde59efd0asb1rfkjvr7' (length=26)
'product0' => string '5' (length=1)
'product1' => string '5' (length=1)
'config' => string '2' (length=1)
'accordeon' => string '3' (length=1)
'vmapply' => string '0' (length=1)
'_FILES' =>
array (size=0)
empty
'_ENV' =>
array (size=0)
empty
'_REQUEST' =>
array (size=0)
empty
'_SERVER' =>
array (size=27)
      'HTTP_HOST' => string 'localhost' (length=9)
      'HTTP_CONNECTION' => string 'keep-alive' (length=10)
      'HTTP_ACCEPT' => string 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*//*;q=0.8' (length=74)
      'HTTP_USER_AGENT' => string 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.89 Safari/537.36' (length=119)
      'HTTP_ACCEPT_ENCODING' => string 'gzip, deflate, sdch' (length=19)
      'HTTP_ACCEPT_LANGUAGE' => string 'en-US,en;q=0.8,it;q=0.6' (length=23)
      'HTTP_COOKIE' => string '__atuvc=4%7C47; ja_elastica_tpl=ja_elastica; 7cc92d763a31ffb85e79f7cc95a3d712=skmm2ru7eah674naisv4qsbhn0; b6d64657a200358259060f7c18462154=v9d3oerde59efd0asb1rfkjvr7; product0=5; product1=5; config=2; accordeon=3; vmapply=0' (length=223)
      'PATH' => string '/usr/bin:/bin:/usr/sbin:/sbin' (length=29)
      'SERVER_SIGNATURE' => string '' (length=0)
      'SERVER_SOFTWARE' => string 'Apache/2.2.26 (Unix) DAV/2 PHP/5.4.30 mod_ssl/2.2.26 OpenSSL/0.9.8zc' (length=68)
      'SERVER_NAME' => string 'localhost' (length=9)
      'SERVER_ADDR' => string '::1' (length=3)
      'SERVER_PORT' => string '80' (length=2)
      'REMOTE_ADDR' => string '::1' (length=3)
      'DOCUMENT_ROOT' => string '/Library/WebServer/Documents' (length=28)
      'SERVER_ADMIN' => string 'you@example.com' (length=15)
      'SCRIPT_FILENAME' => string '/Users/ColomboM/Sites/phpcert/Manual/Language_Reference/_3_Variabili/_2_scope.php' (length=81)
      'REMOTE_PORT' => string '58635' (length=5)
      'GATEWAY_INTERFACE' => string 'CGI/1.1' (length=7)
      'SERVER_PROTOCOL' => string 'HTTP/1.1' (length=8)
      'REQUEST_METHOD' => string 'GET' (length=3)
      'QUERY_STRING' => string '' (length=0)
      'REQUEST_URI' => string '/~ColomboM/phpcert/Manual/Language_Reference/_3_Variabili/_2_scope.php' (length=70)
      'SCRIPT_NAME' => string '/~ColomboM/phpcert/Manual/Language_Reference/_3_Variabili/_2_scope.php' (length=70)
      'PHP_SELF' => string '/~ColomboM/phpcert/Manual/Language_Reference/_3_Variabili/_2_scope.php' (length=70)
      'REQUEST_TIME_FLOAT' => float 1426604007.151
      'REQUEST_TIME' => int 1426604007
  'GLOBALS' =>
    &array
  'a' => int 1
 */
 echomine();//1

 function stampa_global() {
     global $a;
     var_dump($a);
 }

 stampa_global(); //int(1)

 /*
  * global $var può essere vista come $var =& $GLOBALS['var'];
  */

 /*
  * Le variabili statiche esistono solo all'interno delle funzioni.
  * non possono essere inizializzate con delle espressioni
  */

 function stats() {
     //static $a = 1+2; //PHP Parse error:  syntax error, unexpected '+', expecting ',' or ';'
     //questo perchè le dichiarazioni statiche sono risolte a compile time
 }

 /* variabili statiche e globali sono gestite come se fossero dei references */

 function con_ref() {
     global $o;   ////E' come $o =& $GLOBALS['o']
     $o =& new stdClass;//qui non faccio altro che riassegnare l'alias della variabile $o, che è locale alla funzione e quindi va persa.
                        //stessa logica si applica alle variabili "static"
     //tra l'altro:
     //PHP Deprecated:  Assigning the return value of new by reference is deprecated
 }

 function no_ref() {
     global $o;
     $o = new stdClass;
 }

 con_ref();
 var_dump($o); //NULL
 no_ref();
 var_dump($o);
/*
 * object(stdClass)#1 (0) {
}
 */

 /*
  * Se assegno by reference ad una global o a una varaibile statica,
  * questa assegnazione non viene ricordata.
  */

 function statica() {
     static $a;
     $a++;//non da nessuna segnalazione, nemmeno un notice

     echo $a,PHP_EOL;
 }
 statica();//1
 statica();//2

 $b++;//Notice: Undefined variable: b in
 echo $b,PHP_EOL;//1
