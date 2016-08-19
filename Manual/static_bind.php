<?php

/**
 * prove.php
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
class Number
{
	private $v;
	private static $sv = 10;

	public function __construct($v)
	{
		$this->v = $v;
	}

	public function mul()
	{
		return static function ($x)
		{
			return isset($this) ? $this->v * $x : self::$sv * $x;
		};
	}
}

$one = new Number(1);
$two =
	new Number(2);
$double = $two->mul();
$x = Closure::bind($double, null, 'Number');
echo
$x(5);//50