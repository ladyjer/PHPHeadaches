<?php
/**
 * main.php
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

include __DIR__.DIRECTORY_SEPARATOR.'myinclude.php';

echo 'Ciao';//echoes ciao

function cippa() {
	$x = include __DIR__.DIRECTORY_SEPARATOR.'myinclude.php';
	return "miao $x";
}

echo cippa(); //echoes miao bau