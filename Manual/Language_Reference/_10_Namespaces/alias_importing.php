<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/14/14
 * Time: 10:43 PM
 *
 *
 * The ability to refer to an external fully qualified name with an alias, or importing,
 * is an important feature of namespaces.
 * This is similar to the ability of unix-based filesystems to create symbolic links to a file or to a directory
 * All versions of PHP that support namespaces support three kinds of aliasing or importing: aliasing a class name,
 * aliasing an interface name, and aliasing a namespace name.
 * PHP 5.6+ also allows aliasing or importing function and constant names.
 */
namespace x\primo {
    use Exception;
    class prima
    {
        function __construct()
        {
            //new Exception(); //senza la use sopra -->PHP Fatal error:  Class 'x\primo\Exception' not found
            new Exception();
            echo INI_ALL, PHP_EOL;
            echo __METHOD__ . PHP_EOL;
        }
    }
}

namespace y\secondo {
    class seconda
    {
        function __construct()
        {
            echo __METHOD__ . PHP_EOL;
        }
    }

    function f_seconda()
    {
        echo __FUNCTION__ . PHP_EOL;
    }
}

namespace z\terzo {
    const TERZA = 'TERZA';

    class terza
    {
        function __construct()
        {
            echo __METHOD__ . PHP_EOL;
        }
    }
}

/*
 NB. NELLE USE:
the leading backslash is unnecessary and not recommended,
as import names must be fully qualified, and are not processed relative to the current namespace.
 */

namespace {
    use x\primo as prima;
    new prima\prima();
    /*
7
x\primo\prima::__construct
     */

    use y\secondo, z\terzo\terza as t;;//è uguale a use y/secondo ad secondo
    new secondo\seconda(); //y\secondo\seconda::__construct
    /*
     * Attenzione: PHP Fatal error:  Cannot declare class t because the name is already in us
     *
    class t {
        function __construct()
        {
            echo __METHOD__ . PHP_EOL;
        }
    } */
    new t();//z\terzo\terza::__construct
    //new namespace\t;//PHP Fatal error:  Class 't' not found . cerca una funzione t nel global scope. ignora le improtazioni

    //dal 5.6
    //use func y\secondo\f_seconda as seco;
    //seco();
    //use const z_terzo\TERZA;
    //echo TERZA;
}