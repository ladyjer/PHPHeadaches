<?php
/**
 * _1_encoding.php
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
$a = "à";
echo strlen($a);//2
setlocale(LC_ALL, 'it_IT.utf8');
$a = "à";
echo strlen($a);//2