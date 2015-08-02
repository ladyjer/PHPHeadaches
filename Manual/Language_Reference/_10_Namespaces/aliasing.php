<?php
/**
 * Created by IntelliJ IDEA.
 * User: ColomboM
 * Date: 21/10/14
 * Time: 13:02
 *
 * All versions of PHP that support namespaces support three kinds
 * of aliasing or importing: aliasing a class name, aliasing an
 * interface name, and aliasing a namespace name.
 * PHP 5.6+ also allows aliasing or importing function and constant names.
 *
 * use
 *
 * Note that for namespaced names (fully qualified namespace
 * names containing namespace separator, such as Foo\Bar as opposed to global names that do not, such as FooBar), the leading backslash is unnecessary
 * and not recommended, as import names must be fully qualified,
 * and are not processed relative to the current namespace
 *
 * Importing is performed at compile-time,
 * and so does not affect dynamic class, function or constant names.
 */
namespace a\b {
    class X
    {
        public function __construct()
        {
            echo __METHOD__, PHP_EOL;
        }
    }
}

namespace a\c {
    class X
    {
        public function __construct()
        {
            echo __METHOD__, PHP_EOL;
        }
    }
}

namespace a {
    //$a = new X();//Fatal error: Class 'a\X' not found
    $a = new c\X(); //a\c\X::__construct
    $a = new b\X(); //a\b\X::__construct
}

namespace {
    class X
    {
        public function __construct()
        {
            echo __METHOD__, PHP_EOL;
        }
    }
}

namespace a {
    use a\b;
    use a\b as foo;
    use a\b\X as ciao;

    //$a = new X();//PHP Fatal error:  Class 'a\X' not found
    $a = new b\X(); //a\b\X::__construct
    $a = new foo\X(); //a\b\X::__construct
    $a = new ciao(); //a\b\X::__construct
    $u = 'ciao';
    //$a = new $u();//PHP Fatal error:  Class 'ciao' not found
    $u = 'a\c\X';
    $a = new $u(); //a\c\X::__construct
    echo "....................\n";

    use a\c\X;
    $a = new X(); //a\c\X::__construct
    $f = 'X';
    $a = new $f();//X::__construct
    $f = 'a\c\X';
    $a = new $f();//a\c\X::__construct
}
