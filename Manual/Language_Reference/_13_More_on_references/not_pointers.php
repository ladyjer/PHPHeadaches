<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/21/14
 * Time: 10:25 PM
 *
 * As said before, references are not pointers. That means, the following construct won't do what you expect:
 */
  $baz = 10;

  function foo(&$var) {
    $var =& $GLOBALS["baz"];
  }

  echo $bar; //PHP Notice:  Undefined variable: bar
  foo($bar);
  echo "..".$bar;//..   (init a null passando by reference)

  /*
  What happens is that $var in foo will be bound with $bar in the caller,
  but then re-bound with $GLOBALS["baz"]. There's no way to bind $bar in the calling
  scope to something else using the reference mechanism, since $bar is not available in the function
  foo (it is represented by $var, but $var has only variable contents
  and not name-to-value binding in the calling symbol table).
   */
