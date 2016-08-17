<?php
/**
 * _3_double_column.php
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
class MyClass {
	const CONST_VALUE = 'A constant value';
}

$x = new MyClass;
echo $x::CONST_VALUE;//A constant value
echo $x->CONST_VALUE;//<b>Notice</b>:  Undefined property: MyClass::$CONST_VALUE in

/*
 * Da notare che cerca $CONST_VALUE con $ davanti!
 */