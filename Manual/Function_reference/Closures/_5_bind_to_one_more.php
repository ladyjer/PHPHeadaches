<?php
/**
 * _5_bind_to.php
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


class A {
	private $x = 1;
}
class B {
	private $x = 2;
}
class X {
	private $x = 3;
	
	public function getX() {
		return function() {
			return $this->x;
		};
	}
}

$a = new a;
$b = new b;
$x = new x;
$f = $x->getX();
echo $f();//3

$fa = Closure::bind($f, $a);
//echo $fa();//Fatal error: Cannot access private property A::$x
$fa = Closure::bind($f, $a, 'A');
echo $fa();//1
$fb = Closure::bind($f, $b, 'B');
echo $fb();//2
$fx = Closure::bind($f, $x, 'static');
echo $fx();//3

/*
 * bindto è uguale tranne che non è statica: $f->bindto($a, 'A') ...
 */