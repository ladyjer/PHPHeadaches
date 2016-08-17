<?php
/**
 * Created by IntelliJ IDEA.
 * User: ColomboM
 * Date: 21/10/14
 * Time: 15:00
 *
 * rEFEENCES Are: are symbol table aliases, they are not actual memory addresses
 */

 //If you assign, pass, or return an undefined variable by reference, it will get created.

 function prima($a) {}
 function seconda(&$a) {}

 //prima($x); //PHP Notice:  Undefined variable: x
 //echo $x;   //PHP Notice:  Undefined variable: x

 seconda($x); //non da nemmeno un notice, viene creata e assegnato NULL
 if (isset($x)) echo 'settata';//non stampa nulla. isset() restituirà FALSE se si testa una variabile che è stata impostata a NULL
 //xdebug_debug_zval('x');//x: (refcount=1, is_ref=0)=NULL

 /*
Since PHP 5, new returns a reference automatically,
 so using =& in this context is deprecated and produces an E_DEPRECATED message
 in PHP 5.3 and later, and an E_STRICT message in earlier versions.
 (Technically, the difference is that, in PHP 5, object variables,
 much like resources, are a mere pointer to the actual object data,
 so these object references are not "references" in the same sense used before (aliases).
 For more information, see Objects and references.)

 Objects and references
 As of PHP 5, an object variable doesn't contain the object itself as value anymore.
 It only contains an object identifier which allows object accessors to find the actual object.
 When an object is sent by argument, returned or assigned to another variable,
 the different variables are not aliases: they hold a copy of the identifier,
 which points to the same object.

 If you assign a reference to a variable declared global inside a function,
 the reference will be visible only inside the function.
 You can avoid this by using the $GLOBALS array.
  */

 $var1 = 'ciao';
 $var2 = 'bau';

 //If you assign a reference to a variable declared global inside a function,
 //the reference will be visible only inside the function. You can avoid this by using the $GLOBALS array.
 // Praticamente la variabile locale smette di puntare alla global e punta a qualcosa d'altro
 // di conseguenza non modifica + la globale.
 function non_fa_casino() {
     global $var1, $var2;
     echo $var1,'-',$var2,PHP_EOL; //ciao-bau
     $var1 =& $var2;
     echo $var1,'-',$var2,PHP_EOL; //bau-bau
 }

 non_fa_casino();
 echo $var1,'-',$var2,PHP_EOL; //ciao-bau
 echo ".......................\n";

 function fa_casino() {
     global $var1, $var2;
     echo $var1,'-',$var2,PHP_EOL; //ciao-bau
     $GLOBALS['var1'] =& $var2;
     echo $var1,'-',$var2,PHP_EOL; //ciao-bau (sembra un errore ma è così, non cambia)
     echo $GLOBALS['var1'],'-',$var2,PHP_EOL; //bau-bau
 }

 fa_casino();
 echo $var1,'-',$var2,PHP_EOL; //bau-bau

 /*
  * IMPORTANTISSIMO!
  *
  *
  *
  * Think about global $var; as a shortcut to $var =& $GLOBALS['var'];.
  * Thus assigning another reference to $var only changes the local variable's reference.
  */
