<?php
/**
 * _1_visibilita.php
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
	private function ciao() {
		echo 'BAU';
	}
	
	public function saluta() {
		$this->ciao();
	}
}

class b extends a {
	private function ciao() {
		echo 'MIAO';
	}
}

$b = new b;
$b->saluta();//BAU