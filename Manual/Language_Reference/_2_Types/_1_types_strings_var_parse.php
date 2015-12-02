<?php
/**
 * _1_types_strings_var_parse.php
 *
 * PHP Version 7
 *
 * @category IntelliJ IDEA
 * @package  php-cert
 * @author   Mariella <mariella.colombo@ladyj.eu>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://www.ladyj.eu
 *
 * There are two types of syntax: a simple one and a complex one.
 * The simple syntax is the most common and convenient. It provides a way to embed a variable, an array value,
 * or an object property in a string with a minimum of effort.
 * The complex syntax can be recognised by the curly braces surrounding the expression.
 * If a dollar sign ($) is encountered, the parser will greedily take as many tokens as possible
 * to form a valid variable name. Enclose the variable name in curly braces to explicitly specify the end of the name.
 */

$pippo = array('1', '2');
class A {
    private $x = 100;

    function toStringa() {
        return (string) $this->x;
    }
}
$a = new A();


echo "Ciao $pippo come stai?\n"; //Ciao Array come stai? + PHP Notice:  Array to string conversion
echo "Ciao {$pippo} come stai?\n"; //Ciao Array come stai? + PHP Notice:  Array to string conversion
//echo "Ciao $a come stai?";//PHP Catchable fatal error:  Object of class A could not be converted to string
/*
 * Similarly, an array index or an object property can be parsed. With array indices, the closing square bracket (])
 * marks the end of the index. The same rules apply to object properties as to simple variables.
 */
echo "Ciao {$a->toStringa()} come stai?\n";//Ciao 100 come stai?
//Qui sotto praticamente non riconosce le (). Cerca di definire una proprietà, ma alle () si ferma.
//se voglio lanciare un metodo devo usare ()
echo "Ciao $a->toStringa() come stai?";//Ciao () come stai? +  PHP Notice:  Undefined property: A::$toStringa

/*
 * Any scalar variable, array element or object property with a string representation can be included via this syntax.
 * Simply write the expression the same way as it would appear outside the string, and then wrap it in { and }.
 * Since { can not be escaped, this syntax will only be recognised when the $ IMMEDIATELY FOLLOWS {. Use {\$ to get a literal {$.
 */
$great = 'fantastic';
// Won't work, outputs: This is { fantastic}
echo "This is { $great}";
// Works, outputs: This is fantastic
echo "This is {$great}";
echo "This is {great}";//This is {great}
echo "Questo è ${great}";//This is fantastic NON CAPISCO PERCHE' funziona (riga 55)

$pippo = array('foo' => 1000);
echo "Ciao $pippo[foo]";//Ciao 1000
//echo "Ciao $pippo['foo']";//PHP Parse error:  parse error, expecting `"identifier (T_STRING)"' or `"variable (T_VARIABLE)"' or `"number (T_NUM_STRING)"'
echo "Ciao {$pippo[foo]}";//Ciao 1000 Notice: Use of undefined constant foo - assumed 'foo'
echo "Ciao {$pippo['foo']}";//Ciao 1000 NO NOTICE

/*
 * Per farla breve, se uso {} devo scrivere come se stessi fuori dalla stringa, in una linea di codice qualsiasi
 */

function foo() {
    return 'foo';
}

echo "Cippa {${foo()}}";//Cippa + Notice: Undefined variable: foo
echo "Cippa {$pippo[foo()]}";//Cippa 1000
$foo = 'PPPP';
//echo "Cippa {$foo()}";//Fatal error: Call to undefined function PPPP()
echo "Cippa {${foo()}}";//Cippa PPPP (è da ricondurre al caso di riga 55, è come se ciò che c'è tra {} senza $ venga valorizzato)

// CHE CASINOOOOOOOOOO :-o
/*
 * RICORDATI QUESTO
 * If a dollar sign ($) is encountered, the parser will greedily take as many tokens as possible
 * to form a valid variable name. Enclose the variable name in curly braces to explicitly specify the end of the name.
 * e
 * Per farla breve, se uso {} devo scrivere come se stessi fuori dalla stringa, in una linea di codice qualsiasi
 */
