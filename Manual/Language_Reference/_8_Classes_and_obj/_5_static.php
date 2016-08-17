<?php
/**
 * _5_self_static.php
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
	private $a = 10;
	protected $b = 20;
	public $c = 30;
	
	public function test() {
	    echo $this->a, "<br />";
	    echo $this->b, "<br />";
	    echo $this->c, "<br />";
    }
}

class b extends a{
	private $a = 11;
	protected $b = 21;
	public $c = 31;
	
}

$b = new b;
$b->test();
$b->test2();
/*
 * 10
 * 21
 * 31
 */

/*
 * parent, self e static possono essere usati SOLO CON I METODI E LE VARIABILI STATICHE!
 */