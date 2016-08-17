<?php
/**
 * _1_test.php
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

class Base {
	protected static function whoami() {
		echo "Base ";
	}
	public static function whoareyou() {
		self::whoami();
	}
}

class A extends Base {
	public static function test() {
		Base::whoareyou();
		self::whoareyou();
		parent::whoareyou();
		A::whoareyou();
		static::whoareyou();
	}
	public static function whoami() {
		echo "A ";
	}
}
class B extends A {
	public static function whoami() {
		echo "B ";
	}
}
B::test();
//Base B B A B

/*
 * More precisely, late static bindings work by storing the class named in the last "non-forwarding call".
 * In case of static method calls, this is the class explicitly
 * named (usually the one on the left of the :: operator); in case of non static method calls, it is the class of the object.
 * NON FORWARDING CALL --> NOMECLASSE::  &oggetto::
 *
 * A "forwarding call" is a static one that is introduced by self::, parent::, static::, or,
 * if going up in the class hierarchy, forward_static_call(). The function get_called_class() can be used to retrieve a
 * string with the name of the called class and static:: introduces its scope.
 * FORWARDING CALL sono chiamate che usano self:: static:: parent::
 */