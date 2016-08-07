<?php
/**
 * defaults.php
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


function x(&$x = null) {
	$x++;
	echo $x;
}


x();//1
//x(null);//Fatal error: Only variables can be passed by reference

function dumb(stdClass &$x = null) {
	$x = 42;
}
$z = new  stdClass();
dumb($z);
echo $z;//42

// Manca & nel parametro
function dumber(stdClass $x = null) {
	$x = 42;
}
$z = new stdClass();
dumb($z);
echo $z;//42