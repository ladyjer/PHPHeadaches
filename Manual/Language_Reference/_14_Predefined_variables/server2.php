<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/24/14
 * Time: 12:20 PM
 */
function e($n) {
    var_dump($_SERVER[$n]);
}

e('SERVER_ADMIN'); //NULL come cli
                   //web webmaster@localhost - viene preso dal file di configurazione del web server
e('SERVER_PORT');//80
e('SERVER_SIGNATURE');//<address>Apache/2.4.7 (Ubuntu) Server at localhost Port 80</address>
e('SCRIPT_FILENAME');//'/var/www/PHPCert/Manual/Language_Reference/Predef_variables/server2.php
e('SCRIPT_NAME');// /PHPCert/Manual/Language_Reference/Predef_variables/server2.php
e('PHP_SELF');   // /PHPCert/Manual/Language_Reference/Predef_variables/server2.php

e('REQUEST_URI');// /PHPCert/Manual/Language_Reference/Predef_variables/server2.php?ciao[]=mamma&ciao[]=papa
e('QUERY_STRING');// ciao[]=mamma&ciao[]=papa (quello che c'è dopo il ?)
e('PATH_INFO'); //non c'è
e('ORIGINAL_PATH_INFO'); //non c'è
