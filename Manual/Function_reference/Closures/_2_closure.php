<?php
/**
 * _1_closure.php
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

class Test
{
	public function testing()
	{
		return function() {
			var_dump($this);
		};
	}
}

$object = new Test;
$function = $object->testing();
$function();//object(Test)[1]

/*
 * As of PHP 5.4.0, when declared in the context of a class,
 * the current class is automatically bound to it, making $this available inside of the function's scope.
 * If this automatic binding of the current class is not wanted, then static anonymous functions may be used instead.
 */    

