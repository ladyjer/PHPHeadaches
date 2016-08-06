<?php
/**
 * substr.php
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

$a = '0123456789';
echo substr($a, 1, 2), "\n";//12
echo substr($a, -1, 2), "\n";//9
echo substr($a, 1, -2), "\n";//1234567
echo substr($a, -1, -2), "\n";//null
echo substr($a, -5, -2), "\n";//567

//If length is given and is 0, FALSE or NULL, an empty string will be returned.