<?php
/**
 * preg_split.php
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
$str = "The cat on the roof of their house";

$matches = preg_split("/(the)/i", $str, -1, PREG_SPLIT_DELIM_CAPTURE);

var_dump($matches);