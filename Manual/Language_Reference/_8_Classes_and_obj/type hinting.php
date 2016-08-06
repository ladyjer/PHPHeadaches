<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/12/14
 * Time: 9:50 PM
 *
 * Functions are now able to force parameters to be objects
 * (by specifying the name of the class in the function prototype),
 * interfaces,
 * arrays (since PHP 5.1)
 * or callable
 *
 * If class or interface is specified as type hint then all its children or implementations are allowed too.
 *
 * Type hints can not be used with scalar types such as int or string. Resources and Traits are not allowed either.
 *
 * Failing to satisfy the type hint results in a catchable fatal error.
 */

/* Accepting NULL value */
function test(stdClass $obj = NULL) {
  var_dump($obj);
}

test(NULL);
test(new stdClass);
/*
NULL
object(stdClass)#1 (0) {
}
 */

function chiama(callable $x) {
   $x();
}

chiama(function() {
    echo __FUNCTION__; //{closure}
});