<?php
/**
 * _8_make_class_callable.php
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
class CallableClass
{
	public function __invoke($x)
	{
		var_dump($x);
	}
}
$obj = new CallableClass;
$obj(5);
var_dump(is_callable($obj));

/*
int 5

boolean true
*/
