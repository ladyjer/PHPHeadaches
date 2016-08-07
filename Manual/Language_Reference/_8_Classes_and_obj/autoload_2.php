<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/3/14
 * Time: 3:36 PM
 */

    function __autoload($c) {
       echo 'non trovo ' . $c . " " . __FUNCTION__;
    }

    function altra($c) {
        echo 'non trovo ' . $c . " " . __FUNCTION__;
    }

    spl_autoload_register('altra');

    $a = new A();//non trovo A altra (da notare che __autoload non viene eseguita)
                 //Fatal error: Class 'A' not found in

/*
 Register a function with the spl provided __autoload queue.
If the queue is not yet activated it will be activated.

If your code has an existing __autoload() function then this function must be explicitly
registered on the __autoload queue. This is because spl_autoload_register() will effectively
 replace the engine cache for the __autoload() function by either spl_autoload() or spl_autoload_call().

If there must be multiple autoload functions, spl_autoload_register() allows for this.
It effectively creates a queue of autoload functions, and runs through each of them in
the order they are defined. By contrast, __autoload() may only be defined once.

void spl_autoload_call ( string $class_name )
This function can be used to manually search for a class or interface using the registered __autoload functions.
 Try all registered __autoload() function to load the requested class
 */

