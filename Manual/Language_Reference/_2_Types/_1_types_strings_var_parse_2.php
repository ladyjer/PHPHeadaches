<?php

class foo
{
    var $bar = 'I am bar.';
}

$foo = new foo();
$bar = 'bar';
$baz = array('foo', 'bar', 'baz', 'quux');
echo "{$foo->$bar}\n";//I am bar
echo "{$foo->{$baz[1]}}\n";//I am bar
echo "{$foo->$baz[1]}\n";//PHP Notice:  Array to string conversion in
//PHP Notice:  Undefined property: foo::$Array

/* Note:
 * Functions, method calls, static class variables, and class constants inside {$}
 * work since PHP 5. However, the value accessed will be interpreted as the
 * name of a variable in the scope in which the string is defined.
 * Using single curly braces ({}) will not work for accessing
 * the return values of functions or methods or the
 * values of class constants or static class variables.
 */