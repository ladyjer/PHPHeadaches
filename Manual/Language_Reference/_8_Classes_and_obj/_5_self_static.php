<?php
/**
 * _5_self_static.php
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
 */

class a {
	const CANTA = 'SING A SONG';
	public static $s = 1;
	public $v = 2;

	public static function ciao() {
		echo 'Ciao';
	}
}

$a = new A();
echo $a->s;
//Strict standards: Accessing static property a::$s as non static
//Notice: Undefined property: a::$s
//NULL

echo $a::$s;//1
$a->ciao();//Ciao
$a::ciao();//Ciao
echo $a::CANTA;//SINGA A SONG
echo $a->CANTA;//Notice: Undefined property: a::$CANTA e NULL