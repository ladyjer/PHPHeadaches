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
	private static $sfoo = 1;
	private $ifoo = 2;
}
$cl1 = static function() {
	return A::$sfoo;
};
$cl2 = function() {
	return $this->ifoo;
};

$bcl1 = Closure::bind($cl1, null, 'A');
$bcl2 = Closure::bind($cl2, new A(), 'A');
echo $bcl1(), "\n";//1
echo $bcl2(), "\n";//2
