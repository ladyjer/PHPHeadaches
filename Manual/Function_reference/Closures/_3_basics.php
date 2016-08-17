<?php
/**
 * _3_basics.php
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


$f = function() {
	var_dump($this);
};

$f();
//Notice: Undefined variable: this
//NULL

class a {}
class b {}

$a = new a;
$b = new b;

$f->call($a);//con PHP 7! >>>> A
$f->call($b);//con PHP 7! >>>> B