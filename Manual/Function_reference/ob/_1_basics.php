<?php
/**
 * _1_basics.php
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

echo ob_get_level();// 1
ob_start();
echo ob_get_level() . ' A';//2 A
ob_start();
echo ob_get_level() . ' B';
ob_end_clean();//il B sparisce, non verrà mai stampato (tecnicamente livello 3)
echo "Dopo end clean \n", ob_get_level();// Dopo end clean 2
ob_end_flush();//A
echo "Dopo end flush \n", ob_get_level();//Dopo end flish 1