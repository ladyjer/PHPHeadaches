<?php
/**
 * _7_iterate.php
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
class MyClass
{
	public $var1 = 'value 1';
	public $var2 = 'value 2';
	public $var3 = 'value 3';
	
	protected $protected = 'protected var';
	private   $private   = 'private var';
	
	function iterateVisible() {
		echo "MyClass::iterateVisible:\n";
		foreach ($this as $key => $value) {
			print "$key => $value\n";
		}
	}
}

$class = new MyClass();

foreach($class as $key => $value) {
	print "$key => $value\n";
}
echo "\n";


$class->iterateVisible();

/*
var1 => value 1
var2 => value 2
var3 => value 3

MyClass::iterateVisible:
var1 => value 1
var2 => value 2
var3 => value 3
protected => protected var
private => private var
 */