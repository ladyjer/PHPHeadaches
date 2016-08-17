<?php
/**
 * date.php
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


setlocale(LC_TIME, 'it_IT.utf8');

echo date('l', time());//Wednesday
echo strftime('%A', time());//mercoledìWednesday
echo gmmktime(0,0,0,1,1,1970);//0