<?php
/**
 * _somme_su_stringhe.php
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
$testo = 'Ciao';

echo ++$testo;

$testo2 = 'Giulia';

echo $testo + $testo;//0

echo $testo << 1;//0

echo "2cani" << 1;//4

echo false | true;//1
echo false ^ true;//1

$x = 8;
$x <<= 2;

echo $x;//32, cioè 8*4