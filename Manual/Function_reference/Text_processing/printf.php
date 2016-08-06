<?php
/**
 * printf.php
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

printf("Ho speso %b euro", 93); echo "\n";//Ho speso 1011101 euro
printf("Ho speso %c euro", 93); echo "\n";//Ho speso ] euro
printf("Ho speso %e euro", 93); echo "\n";//Ho speso 9.300000e+1 euro
printf("Ho speso %E euro", 93); echo "\n";//Ho speso 9.300000E+1 euro
printf("Ho speso %d euro", 93); echo "\n";//Ho speso 93 euro
printf("Ho speso %f euro", 93); echo "\n";//Ho speso 93.000000 euro (local aware)
printf("Ho speso %F euro", 93); echo "\n";//Ho speso 93.000000 euro (non locale aware)
printf("Ho speso %o euro", 93); echo "\n";//Ho speso 135 euro
printf("Ho speso %s euro", 93); echo "\n";//Ho speso 93 euro
printf("Ho speso %u euro", -93); echo "\n";//Ho speso 93 euro (unsigned)
printf("Ho speso %d euro", -93); echo "\n";//Ho speso -93 euro (signed)
printf("Ho speso %x euro", 93); echo "\n";//Ho speso 5d euro
printf("Ho speso %X euro", 93); echo "\n";//Ho speso 5D euro
