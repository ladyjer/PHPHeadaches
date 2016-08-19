<?php
/**
 * _1_intersect.php
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
<?php
     $array1 = array ('a' => 20, 30, 35);
     $array2 = array ('b' => 20, 35, 30);
     $array = array_intersect_assoc ($array1, $array2);
     var_dump ($array);
/*
array (size=0)
  empty
 */

/*
The two values from the key => value pairs are considered equal only
if (string) $elem1 === (string) $elem2 . In other words a strict
type check is executed so the string representation must be the same.
 */

$array1 = array ('a' => 20, '0' => 30, 35);
$array2 = array ('b' => 20, 30, 35);
$array = array_intersect_assoc ($array1, $array2);
var_dump ($array);

/*
array (size=0)
  empty

array (size=2)
  0 => int 30
  1 => int 35
 */