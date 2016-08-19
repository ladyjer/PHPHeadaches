<?php
/**
 * _2_merge.php
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

    $array1=array("1"=>"cat","2"=>"camel","4"=>"dog","3"=>"test","camel");
    $array2=array("2"=>"elephant","4"=>"camel","dog");
    var_dump(array_merge($array1,$array2));
    
    
    // gli elementi con le stesse chiavi vengono presi una sola volta

$array1=array(1=>"cat",2=>"camel",4=>"dog",3=>"test","camel");
$array2=array(2=>"elephant",4=>"camel","dog");
var_dump(array_merge($array1,$array2));

/*
array (size=8)
  0 => string 'cat' (length=3)
  1 => string 'camel' (length=5)
  2 => string 'dog' (length=3)
  3 => string 'test' (length=4)
  4 => string 'camel' (length=5)
  5 => string 'elephant' (length=8)
  6 => string 'camel' (length=5)
  7 => string 'dog' (length=3)

array (size=8)
  0 => string 'cat' (length=3)
  1 => string 'camel' (length=5)
  2 => string 'dog' (length=3)
  3 => string 'test' (length=4)
  4 => string 'camel' (length=5)
  5 => string 'elephant' (length=8)
  6 => string 'camel' (length=5)
  7 => string 'dog' (length=3)

Merges the elements of one or more arrays together so that the values of one are 
appended to the end of the previous one. It returns the resulting array.

If the input arrays have the same string keys, then the later value 
for that key will overwrite the previous one. If, however, the arrays 
contain numeric keys, the later value will not overwrite the original value, but will be appended.

Values in the input array with numeric keys will be renumbered with 
incrementing keys starting from zero in the result array.
 */