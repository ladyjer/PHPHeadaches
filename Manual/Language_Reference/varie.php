<?php
/**
 * prova.php
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
$a = array(true, '0' => false, false => true);

var_dump($a);

/*
array (size=1)
  0 => boolean true
*/

$a = array(0, 1, 2 => array(3, 4));
$a[3] =
	array(4, 5);
echo count($a, 1);//8

var_dump($a);

/*
 * Conta ricorsivamente le chiavi
 *
 * array (size=4)
  0 => int 0
  1 => int 1
  2 =>
    array (size=2)
      0 => int 3
      1 => int 4
  3 =>
    array (size=2)
      0 => int 4
      1 => int 5
 */


preg_match('/^(\d{1,2}([a-z]+))(?:\s*)\S+ (?=201[0-9])/', '21st March 2014', $matches);
var_dump($matches);
/*
array (size=3)
  0 => string '21st March ' (length=11)
  1 => string '21st' (length=4)
  2 => string 'st' (length=2)
*/

$str = "The cat sat on the roof of their house.";
$matches = preg_split("/(the)/i", $str, -1,
	PREG_SPLIT_DELIM_CAPTURE);
var_dump($matches);
/*
array (size=7)
  0 => string '' (length=0)
  1 => string 'The' (length=3)
  2 => string ' cat sat on ' (length=12)
  3 => string 'the' (length=3)
  4 => string ' roof of ' (length=9)
  5 => string 'the' (length=3)
  6 => string 'ir house.' (length=9)
 */