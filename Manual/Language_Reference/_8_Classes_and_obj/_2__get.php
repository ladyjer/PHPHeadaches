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
 * Consider the following code. What change must be made to the class for the code to work as written?
 *
 * class Magic { protected $v = array("a" => 1, "b" => 2, "c" => 3); public function __get($v) { return $this->v[$v]; } } $m = new Magic(); $m->d[] = 4; echo $m->d[0];
 * Consider the following code. What change must be made to the class for the code to work as written? class Magic { protected $v = array("a" => 1, "b" => 2, "c" => 3); public function __get($v) { return $this->v[$v]; } } $m = new Magic(); $m->d[] = 4; echo $m->d[0];
 * Nothing, this code works just fine.
 * Rewrite __get as: public function &__get($v)
 * E: Make __get method static
 * Add __set method doing $this->v[$var] = $val
 * Rewrite __get as: public function __get(&$v)
 * */
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