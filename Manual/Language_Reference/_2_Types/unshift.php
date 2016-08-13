<?php
/**
 * unshift.php
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

$a = array();

$a['a'] = 10;
$a['1'] = 11;

array_unshift($a, 12,13);

var_dump($a);

/*
array(4) {
  [0]=>
  int(12)
  [1]=>
  int(13)
  ["a"]=>
  int(10)
  [2]=>
  int(11)
}
 */