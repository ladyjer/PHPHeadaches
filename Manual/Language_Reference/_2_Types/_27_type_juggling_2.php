<?php
/**
 * _27_type_juggling_2.php
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
$a = "1";
$b = "01";

if ($a == $b) {
	echo "a"; ///echoes a
}
else {
	echo "b";
}

$a = "1";
$b = "01x";

if ($a == $b) {
	echo "a";
}
else {
	echo "b";//echoes b
}

$a = "1";
$b = "01";

if ($a === $b) {
	echo "a";
}
else {
	echo "b";//echoes b
}

if ($a < $b) {
	echo "e";
}
else {
	echo "f";//echoes F
}

if ($a <= $b) {
	echo "e";//echoes e
}
else {
	echo "f";
}