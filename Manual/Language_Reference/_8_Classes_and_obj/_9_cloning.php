<?php
/**
 * _9_cloning.php
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

/*
An object copy is created by using the clone keyword (which calls the object's __clone()
method if possible). An object's __clone() method cannot be called directly.

$copy_of_object = clone $object;
When an object is cloned, PHP 5 will perform a shallow copy of all of the object's properties.
Any properties that are references to other variables will remain references.

void __clone ( void )
Once the cloning is complete, if a __clone() method is defined, then the newly created object's __clone()
method will be called, to allow any necessary properties that need to be changed.
 */

class a {
	function __clone()
	{
		var_dump (spl_object_hash($this));//0000000011467c1400007faa05c1c0fc
	}
}

$a = new a();
var_dump(spl_object_hash($a));//0000000011467c1700007faa05c1c0fc

$b = clone $a;

/*
 * I due id sono diversi ... c14 e .. c17
 */