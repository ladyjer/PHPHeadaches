<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/14/14
 * Time: 9:46 PM
 *
 * Relative file name like foo.txt. This resolves to currentdirectory/foo.txt where
 * currentdirectory is the directory currently occupied. So if the current directory
 * is /home/foo, the name resolves to /home/foo/foo.txt.
Relative path name like subdirectory/foo.txt. This resolves to currentdirectory/subdirectory/foo.txt.
Absolute path name like /main/foo.txt. This resolves to /main/foo.txt.
 *
 * per le sole FUNZIONI e COSTANTI:
 *
 *  One caveat: unqualified names for functions and constants will
 * resolve to global functions and constants
 * if the namespaced function or constant is not defined
 */

 namespace fumagalli\giulia {
     function foo() {
         echo __FUNCTION__,PHP_EOL;
     }
 }

 namespace fumagalli {
     function foo() {
         //echo new Exception();//PHP Fatal error:  Class 'fumagalli\Exception' not found
         echo new \Exception();//ok
         echo "<<<",giulia\foo();
         echo __FUNCTION__,PHP_EOL;
     }
 }

 namespace {
     function foo()
     {
         echo __FUNCTION__,PHP_EOL;
     }
     foo();
     \foo();
     \fumagalli\foo();
     \fumagalli\giulia\foo();
     echo \strlen('ciao'),PHP_EOL;
     echo strlen('ciao'),PHP_EOL;
     echo new Exception();
 }

/*
foo
foo
exception 'Exception' in /var/www/PHPCert/Manual/Language_Reference/Namespaces/risoluzione.php:30
Stack trace:
#0 /var/www/PHPCert/Manual/Language_Reference/Namespaces/risoluzione.php(43): fumagalli\foo()
#1 {main}<<<fumagalli\giulia\foo
fumagalli\foo
fumagalli\giulia\foo
4
4
exception 'Exception' in /var/www/PHPCert/Manual/Language_Reference/Namespaces/risoluzione.php:47
Stack trace:
#0 {main}
 */

