<?php
/**
 * _44_object.php
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
$a = new stdClass();//true
$b = new stdClass();//false

var_dump($a == $b);
var_dump($a === $b);

$a->x = 10;

var_dump($a == $b);//false
var_dump($a === $b);//false