<?php
/**
 * _33_array_and_assign.php
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
$a = [1,2,3];
$b = $a;

$b[0] += 1;

var_dump($a);
var_dump($b);

/*
array (size=3)
  0 => int 1
  1 => int 2
  2 => int 3

array (size=3)
  0 => int 2
  1 => int 2
  2 => int 3

GLI ARRAY VENGONO COPIATI
 */