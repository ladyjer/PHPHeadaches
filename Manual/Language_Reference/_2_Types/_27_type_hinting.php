<?php
/**
 * _27_type_hinting.php
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
class A {
	function __construct()
	{
		echo 'Ciao', "\n";
	}
}

function x (A $a) {
	echo 'Lanciato X', "\n";//Non viene lanciato mai
}

function Y (A $a = null) {
	echo 'Lanciato Y', "\n";//Non viene lanciato mai
}

$x = new a();//Nomi classi sono case insensitive

//x($X);//Notice: Undefined variable: X e ...
      //....Catchable fatal error: Argument 1 passed to x() must be an instance of A, null given
//x(null);//Catchable fatal error: Argument 1 passed to x() must be an instance of A, null given
Y(null);//Lanciato Y
Y();//Lanciato Y