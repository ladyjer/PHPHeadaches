<?php
/**
 * _1_strtr.php
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
 *
 * string strtr ( string $str , string $from , string $to )
 * string strtr ( string $str , array $replace_pairs )
 *
 * If given two arguments, the second should be an array
 * in the form array('from' => 'to', ...). The return value is a string where all
 * the occurrences of the array keys have been replaced by the corresponding values.
 * The longest keys will be tried first. Once a substring has been replaced,
 * its new value will not be searched again.
 *
 *
 * Se si usano gli array viene prima cercata la chiave + lnga.
 * Se un pezzo di stringa viene sostituito, al 1° giro, non viene + cambiato ulteriormente
 */

echo strtr('Apples and bananas', 'a', 'e');//Apples end benenes

$trans = array("h" => "-", "hello" => "hi", "hi" => "hello");
echo strtr("hi all, I said hello", $trans);//hello all, I said hi
