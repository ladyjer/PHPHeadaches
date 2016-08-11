<?php
/**
 * _20_array_keys.php
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

$a[1] = 'Ciao';
$a['1'] = 'Miao';
$a[01] = 'Bau';
$a[1.0] = 'Guru';
$a['01'] = 'Nuovo';

var_dump($a);

/*
 * array(2) {
  [1]=>
  string(4) "Guru"
  ["01"]=>
  string(5) "Nuovo"
}
 */

$a = array();
$b = array();

$a[1] = 12;
$b['1'] = 12;

echo $a === $b;//true

$a = array();
$b = array();

$a[1] = 12;
$b['1'] = '12';

echo $a === $b;//false

$a = null;
echo isset($a);//false

$a = array();
$a[1] = null;
echo isset($a[1]);//false

var_dump(0 == null);//true!