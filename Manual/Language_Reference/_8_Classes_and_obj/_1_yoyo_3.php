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
	private $name = __CLASS__;
	protected $pro = "CANTA!";
	
	public function canta() {
		echo $this->name . " " .$this->pro;
	}
}

class b extends a {
	public $name = __CLASS__;
	protected $pro = "CANTA???";
}

$b = new b;
$b->canta();//a CANTA???
/*
 * Di nuovo. $name è private in A, e le proprietà private non si possono sovrascrivere per definizione
 */