<?php
/**
 * _1_yoyo.php
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
	protected $name = __CLASS__;
	protected $pro = "CANTA!";
	
	public function canta() {
		echo $this->name . " " .$this->pro;
	}
}

class b extends a {
	protected $name = __CLASS__;
	protected $pro = "CANTA???";
}

$b = new b;
$b->canta();//b CANTA???
/*
 * Finalmente! $name in A è diventato protected. Si può sovrascrivere.
 */