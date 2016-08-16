<?php
/**
 * _10_method_rewrite.php
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
	private $foo;
	
	public function __construct($foo) {
		$this->foo = $foo;
	}
	
	public function bar() {
		return function($x) {
			return $this->foo * $x;
		};
	}
}

$a = new A(2);
$a->bar = function($x) {
	return $x * $x;//non viene mai eseguita
};

$m = $a->bar();
echo $m(3);//6

/*
 * Ma se faccio così cambia
 */
$a = new A(2);
$a->bar = function($x) {
	return $x * $x;//Questa si che viene eseguita!
};
$m = $a->bar;// <<< la differenza è qui!
echo $m(3);//9!!!