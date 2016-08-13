<?php
/**
 * _1_foreach.php
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
 * The foreach construct provides an easy way to iterate over arrays. foreach works only on arrays and objects,
 * and will issue an error when you try to use it on a variable with a different data type or an uninitialized variable.
 * The first form loops over the array given by array_expression. On each iteration,
 * the value of the current element is assigned to
 * $value and the internal array pointer is advanced by one (so on the next iteration, you'll be looking at the next element).
 */
$colors = array(
	'r' => 'f00',
	'g' => '0f0',
	'b' => '00f'
);

next($colors);

foreach ($colors as $k => $v) {
	echo $k;
}

reset($colors);

while (list($v, $k) = each($colors)) {
	echo $v;
}

////rgbrgb