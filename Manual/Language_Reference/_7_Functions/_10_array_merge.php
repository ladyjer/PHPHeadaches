<?php
/**
 * _10_array_merge.php
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

    $var1 = array("foo", "bar", "hello", "world", "PHP", "nice");
    $var2 = array("foo", "bar", "hello", "PHP", "nice", "language");
    echo count( array_merge(array_diff($var1,$var2),array_diff($var2,$var1))),"\n";

    var_dump(array_diff($var1,$var2));
    var_dump(array_diff($var2,$var1));
    var_dump(array_merge(array_diff($var1,$var2),array_diff($var2,$var1)));

/*
2
array(1) {
  [3]=>
  string(5) "world"
}
array(1) {
  [5]=>
  string(8) "language"
}
array(2) {
  [0]=>
  string(5) "world"
  [1]=>
  string(8) "language"
}
*/