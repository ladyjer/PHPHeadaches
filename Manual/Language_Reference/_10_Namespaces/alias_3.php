<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/14/14
 * Time: 11:29 PM
 *
 * The use keyword must be declared in the outermost scope of a file (the global scope) or
 * inside namespace declarations. This is because
 * the importing is done at compile time and not runtime, so it cannot be block scoped.
 *
 * Importing rules are per file basis,
 * meaning included files will NOT inherit the parent file's importing rules.
 *
 * E SE FACCIO INCLUDE DI UN FILE IN UN NAMESPACE, NON RECEPISCE IL NAMESPACE
 */
 namespace X {
     include('alias2.php');
     use ciao\saluta as salve;

     echo ".........................",PHP_EOL;
     new salve();//ciao\saluta::__construct


     include('alias_4.php');
     echo ".........................",PHP_EOL;
     echo_nsp();
 }

/*
ciao\saluta::__construct
ciao\x::__construct
x::__construct
.........................
ciao\saluta::__construct
.........................
......
 */