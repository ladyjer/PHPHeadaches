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

class a {
	function __construct()
	{
		$f = (static function() {
			var_dump($this);
		});
		
		$f();
    }
};

//As of PHP 5.4, anonymous functions may be declared statically.
// This prevents them from having the current class automatically bound to them.
// Objects may also not be bound to them at runtime.

$a = new a();
//Notice: Undefined variable: this
//NULL