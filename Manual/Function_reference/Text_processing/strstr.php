<?php
/**
 * strstr.php
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


$ciao = "Il PHP è il mio linguaggio";
echo strstr($ciao, 'PHP');// PHP è il mio linguaggio
echo strstr($ciao, 'PHP', true);// Il