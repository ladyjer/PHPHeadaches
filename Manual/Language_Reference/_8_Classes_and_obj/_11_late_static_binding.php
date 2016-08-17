<?php
/**
 * _11_late_static_binding.php
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
 *
 * More precisely, late static bindings work by storing the class named in the last "non-forwarding call".
 * In case of static method calls, this is the class explicitly named (usually the one on the left of
 * the :: operator); in case of non static method calls, it is the class of the object. A "forwarding call" is
 * a static one that is introduced by self::, parent::, static::, or, if going up in the class hierarchy,
 * forward_static_call(). The function get_called_class() can be used to retrieve a string with
 * the name of the called class and static:: introduces its scope.

This feature was named "late static bindings" with an internal perspective in mind. "Late binding"
 * comes from the fact that static:: will not be resolved using the class where the method is defined but
 * it will rather be computed using runtime information. It was also called a "static binding" as it can
 * be used for (but is not limited to) static method calls.
 */

class A {
	public static function canta() {
		var_dump(self::dammi_opera());
		var_dump(__CLASS__);
		var_dump(get_called_class());

    }

	public static function dammi_opera() {
		return 'AIDA';
	}
}

class B extends a {
	public static function dammi_opera() {
		return 'TROVATORE';
	}
}

B::canta();
/*
string 'TROVATORE' (length=9)

string 'A' (length=1)

string 'B' (length=1)
 */