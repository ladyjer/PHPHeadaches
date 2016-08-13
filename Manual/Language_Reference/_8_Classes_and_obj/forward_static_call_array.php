<?php
/**
 * forward_static_call_array.php
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


class A
{
	const NAME = 'A';
	public static function test() {
		$args = func_get_args();
		echo self::NAME, " ".join(',', $args)." \n";
	}
}

class B extends A
{
	const NAME = 'B';
	
	public static function test() {
		echo self::NAME, "\n";
		forward_static_call_array(array('A', 'test'), array('more', 'args'));
		forward_static_call_array( 'test', array('other', 'args'));
	}
}

B::test('foo');

function test() {
	$args = func_get_args();
	echo "C ".join(',', $args)." \n";
}