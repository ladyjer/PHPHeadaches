<?php
/**
 * parse_error.php
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

try {
	$x = 0;
	echo $x
} catch (Exception $e) {
	echo $e->getMessage();
}

//Parse error che non viene gestito dall'eccezione