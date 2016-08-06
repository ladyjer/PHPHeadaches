<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/24/14
 * Time: 10:17 AM
 */

 function e($n) {
     var_dump($_SERVER[$n]);
 }

 e('PHP_SELF');//web /PHPCert/Manual/Language_Reference/Predef_variables/server.php
               //run /var/www/PHPCert/Manual/Language_Reference/Predef_variables/server.php
 echo __FILE__,PHP_EOL; //entrambi /var/www/PHPCert/Manual/Language_Reference/Predef_variables/server.php

 /* run */
 e('argv');
 e('argc');
 /*
array(1) {
  [0]=>
  string(70) "/var/www/PHPCert/Manual/Language_Reference/Predef_variables/server.php"
}
int(1)
  */

 /* web
 Notice: Undefined index: argv
 Notice: Undefined index: argc
 null
 null
 */

 /* se passo il parametro ciao=mamma */
 /* run

array(2) {
  [0]=>
  string(70) "/var/www/PHPCert/Manual/Language_Reference/Predef_variables/server.php"
  [1]=>
  string(10) "ciao=mamma"
}
int(2)

 web
 non cambia, i parametri argv e argc non ci sono


 */
 //via script sono null queste sotto
 e('SERVER_NAME');//localhost
 e('SERVER_ADDR');//127.0.0.1
 e('SERVER_SOFTWARE');//'Apache/2.4.7 (Ubuntu)
 e('SERVER_PROTOCOL');//HTTP/1.1
 e('REQUEST_METHOD');//GET
 e('QUERY_STRING');//ciao=mamma
 e('DOCUMENT_ROOT');//"" con script, /var/www via web
 //Contents of the Accept: header from the current request, if there is one
 e('HTTP_ACCEPT');//null con script, via web text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
 //Contents of the Accept-Charset: header from the current request, if there is one. Example: 'iso-8859-1,*,utf-8'.
 e('HTTP_ACCEPT_CHARSET');//bho su apache da notice, index non found
 e('HTTP_ACCEPT_ENCODING');//gzip, deflate
 e('HTTP_ACCEPT_LANGUAGE');//'it,en-us;q=0.7,en;q=0.3
 e('HTTP_CONNECTION');//keep-alive
 e('HTTP_HOST');//Contents of the Host: header from the current request, if there is one (localhost)
 /*
  * The address of the page (if any) which referred the user agent to the current page.
  * This is set by the user agent. Not all user
  * agents will set this, and some provide the ability to modify
  * HTTP_REFERER as a feature. In short, it cannot really be trusted.
  */
 e('HTTP_REFERER');
 e('HTTP_USER_AGENT');//Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:33.0) Gecko/20100101 Firefox/33.0
 //Set to a non-empty value if the script was queried through the HTTPS protocol.
 //Note: Note that when using ISAPI with IIS, the value will be off if the request was not made through the HTTPS protocol.
 e('HTTPS');

 e('REMOTE_ADDR'); //127.0.0.1 ... 79.31.165.92
 e('REMOTE_HOST'); //non c'è : Note: Your web server must be configured to create this variable.
                   //For example in Apache you'll need HostnameLookups On inside httpd.conf for it to exist. See also gethostbyaddr().
 e('REMOTE_PORT'); //42790
 e('REMOTE_USER'); //l'utente con la quale mi sono autenticata

 e('SCRIPT_FILENAME');//funziona sia con run che con web
 ///var/www/PHPCert/Manual/Language_Reference/Predef_variables/server.php

 //anche via script
 //inizio della richiesta
 e('REQUEST_TIME');//int 1414144263
 //inizio della richiesta con precisione ai millisecondi
 e('REQUEST_TIME_FLOAT');//float(1414144287.5456)


 var_dump($_GET);


