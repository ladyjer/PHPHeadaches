<?php
/**
 * formattazione_numeri.php
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
setlocale(LC_MONETARY, 'it_IT.utf8');

$amt = 100;

// locale aware
echo money_format('%.2i', $amt);//EUR 100,00
echo money_format('%.2n', $amt);//€ 100,00
echo number_format($amt);//100