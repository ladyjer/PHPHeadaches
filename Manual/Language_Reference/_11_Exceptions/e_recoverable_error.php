<?php

class ClassA {
    public function method_a (ClassB $b)
    {}
}

class ClassB {}
class ClassWrong{}

$a = new ClassA;
// Scatena un
// Catchable fatal error</b>:  Argument 1 passed to ClassA::method_a()
// must be an instance of ClassB, instance of ClassWrong given
try {
  $a->method_a(new ClassWrong);
} catch (Exception $e) {
    // Qui non passa mai
    echo '<<<<Catched by exception';
} catch(Error $err) {
    // Qui arriva solo con PHP 7
    echo "<<<<Catched by Error : ", $err->getMessage(), PHP_EOL;
}

/*
 * per PHP 5
 *
 * E_RECOVERABLE_ERROR ( integer )
 * Catchable fatal error. It indicates that a probably dangerous 
 * error occured, but did not leave the Engine in an unstable state.
 * If the error is not caught by a user defined handle (see also set_error_handler()),
 * the application aborts as it was an E_ERROR.
 */
