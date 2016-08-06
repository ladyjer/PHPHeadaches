<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/23/14
 * Time: 10:49 PM
 *
 * Si chiamano così perchè non c'è bisogno di definirle con global
 * dentro una funzione per poterle vedere.
 * Superglobals cannot be used as variable variables inside functions or class methods.
 */

 echo $GLOBALS['fo'],PHP_EOL;//PHP Notice:  Undefined index: fo
 $fo = 10;
 echo $GLOBALS['fo'],PHP_EOL;//10
