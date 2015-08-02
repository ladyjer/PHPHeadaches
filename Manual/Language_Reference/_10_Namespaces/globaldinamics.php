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
function foo()
{
    echo __FUNCTION__, PHP_EOL;
}

class bar
{
    function __construct()
    {
        echo __METHOD__, PHP_EOL;
    }
}

const COSTANTE = 'GLOBALE';