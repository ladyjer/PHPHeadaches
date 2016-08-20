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
function f(stdClass &$x = NULL)
{
	$x = 42;
}

$z =
	new stdClass;
f($z);
var_dump($z);//int (42))

function c(stdClass $x = NULL)
{
	$x = 42;
}

$z =
	new stdClass;
c($z);
var_dump($z);//object(stdClass)[1]