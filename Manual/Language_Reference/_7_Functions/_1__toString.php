<?php
/**
 * _1__toString.php
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
class Car {
	private function __toString() {
		echo 'Ciao';
	}
}

$o = new Car();
echo $o;//Catchable fatal error: Method Car::__toString() must return a string value

/*
 * Se faccio diventare __toString private, oltre all errore di prima
 * si aggiunge un;
 * Warning: The magic method __toString() must have public visibility and cannot be static
 */