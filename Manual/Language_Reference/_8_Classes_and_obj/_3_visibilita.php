<?php
/**
 * _3_visibilita.php
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
	private function foo() {
		echo "success!\n";
	}
	public function test() {
		$this->foo();
		static::foo();
	}
}

class B extends A {
	/* foo() will be copied to B, hence its scope will still be A and
	 * the call be successful */
}

class C extends A {
	private function foo() {
		/* original method is replaced; the scope of the new one is C */
	}
}

$b = new B();
$b->test();//success success
$c = new C();
$c->test();//fails: Fatal error: Call to private method C::foo() from context 'A'