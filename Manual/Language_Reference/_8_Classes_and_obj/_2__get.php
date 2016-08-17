<?php

/**
 * _2__get.php
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
 **/
class Magic
{
	protected $v = array("a" => 1, "b" => 2, "c" => 3);
	
	public function &__get($v)
	{
		// viene chiamata con paramentro "d
		return $this->v[$v];
	}
}

$m = new Magic();
$m->d[] = 4;
echo $m->d[0];

/*
 * [] richiama la __get, ha precedenza maggiore dell assegnazione =
 *
 * Il contenuto dell'array diventa
 * v = {array} [4]
		 a = 1
		 b = 2
		 c = 3
		 d = {array} [1]
			0 = 4
 */