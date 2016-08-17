<?php
/**
 * _3_double_column.php
 *
 * PHP version 5
 *
 * @category   Joomla_Components
 * @package    Joomla.Administrator
 * @subpackage Com_Arxivar
 * @author     Mariella Colombo <mariella.colombo@ladyj.eu>
 * @copyright  Copyright © 2016 Colombo Mariella
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://www.ladyj.eu
 *
 *
 * Scope Resolution Operator (::)
 *
 */class A
{
	function foo()
	{
		if (isset($this)) {
			echo '$this è definito (';
			echo get_class($this);
			echo ")\n";
		} else {
			echo "\$this non è definito\n";
		}
	}
}

class B
{
	function bar()
	{
		// Nota: la seguente operazione darà luogo ad un segnale di Warning se E_STRICT è abilitato.
		A::foo();
	}
}

$a = new A();
$a->foo();//$this è definito (A)

// Nota: la seguente operazione darà luogo ad un segnale di Warning se E_STRICT è abilitato.
A::foo();//$this non è definito
$b = new B();
$b->bar();//$this è definito (B)

// Nota: la seguente operazione darà luogo ad un segnale di Warning se E_STRICT è abilitato.
B::bar();//$this non è definito