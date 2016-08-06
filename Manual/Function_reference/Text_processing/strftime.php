<?php
/**
 * strftime.php
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

//per avere l'elenco dei locale "locale -a"
setlocale(LC_ALL, "it_IT.utf8");
echo strftime("%A %B", time());//domenica luglio (sul mio portatile)