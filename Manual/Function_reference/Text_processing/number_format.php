<?php
/**
 * number_format.php
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

echo number_format(12.345, 2, ',', '.');//12,35
echo number_format(12.345, 2, ',');//Warning</b>:  Wrong parameter count for number_format()

setlocale(LC_ALL, "it_IT.utf8");
echo money_format("%.2n", "1200.343");//€ 1.200,34
echo money_format("%.1n", "1200.343");//€ 1.200,3