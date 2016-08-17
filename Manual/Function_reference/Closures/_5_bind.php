<?php
/**
 * _4_bind.php
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
 *  Closure {
private __construct ( void )
public static Closure bind ( Closure $closure , object $newthis [, mixed $newscope = "static" ] )
public Closure bindTo ( object $newthis [, mixed $newscope = "static" ] )
public mixed call ( object $newthis [, mixed $... ] )
}
 *
 * DA NOTARE CHE IL COSTRUTTRE E' PRIVATO
 */

class x {
	function getF() {
		return function() {
			var_dump($this);
		};
	}
}

$f = (new x())->getF();

$f();
//object(x)[1]

class a {}
class b {}

$a = new a;
$b = new b;

// bind Returns a new Closure object or FALSE on failure
$fa = Closure::bind($f, $a);
$fa();
//object(a)[3]
$fb = Closure::bind($f, $b);
$fb();
//object(b)[4]
$fx = Closure::bind($f, null);
$fx();
//Notice: Undefined variable: this
//null