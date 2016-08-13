<?php
/**
 * arra_merge.php
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
 * array merge
 * Merges the elements of one or more arrays together so that the values
 * of one are appended to the end of the previous one. It returns the resulting array.
 * If the input arrays have the same string keys, then the later value for that key will
 * overwrite the previous one. If, however, the arrays contain numeric keys,
 * the later value will not overwrite the original value, but will be appended.
 *
 * +
 * The + operator returns the right-hand array appended to the left-hand array;
 * for keys that exist in both arrays, the elements from the left-hand array will be used,
 * and the matching elements from the right-hand array will be ignored.
 */
$a = array('z', 'x');
$b = array('y', 'w');

$c = array('a' => 1, 'b' => 2);
$d = array('b' => 3, 'd' => 4);

$e = $a + $b;
$f = $c + $d;

foreach ($e as $value) {
	echo $value;
}

foreach ($f as $value) {
	echo $value;
}

//zx124

$e = array_merge($a, $b);
$f = array_merge($c, $d);

foreach ($e as $value) {
	echo $value;
}

foreach ($f as $value) {
	echo $value;
}

//zxyw134