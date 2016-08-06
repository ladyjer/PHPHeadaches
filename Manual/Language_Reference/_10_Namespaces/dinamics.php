<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/14/14
 * Time: 10:05 PM
 *
 * One must use the fully qualified name (class name with namespace prefix).
 * Note that because there is no difference between a qualified
 * and a fully qualified Name inside a dynamic class name,
 * function name, or constant name, the leading backslash is not necessary.
 */
 namespace fumagalli {
     function foo() {
         echo __FUNCTION__,PHP_EOL;
     }

     class bar {
         function __construct() {
             echo __METHOD__,PHP_EOL;
         }
     }

     const COSTANTE = 'DA FUMAGALLI';

     include(__DIR__.'/globaldinamics.php');

     $f = 'foo';
     foo();//fumagalli\foo
     $f();//foo. dinamicamente viene chiamata quella a livello globale
     $c = 'bar';
     new bar();//fumagalli\bar::__construct
     new $c(); //bar::__construct
     echo COSTANTE,PHP_EOL;//DA FUMAGALLI
     echo constant('COSTANTE'),PHP_EOL;//GLOBALE

     $f = 'fumagalli\foo';
     $f();//fumagalli\foo
 }
