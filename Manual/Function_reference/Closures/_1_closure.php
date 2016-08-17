<?php
/**
 * _1_closure.php
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

$x = 'Ciao';

$f = function() use ($x) {
	echo $x;
};
	
$x = 'Miao';

$f();//echoes Ciao

$f = function() use (&$x) {///<<< tutto uguale, passo però by ref
	echo $x;
};

$x = 'Miao';

$f();//echoes Miao

var_dump($f);//object(Closure)[2]
