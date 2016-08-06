<?php
/**
 * null_meta_character.php
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

$ciao = "Ciao%00bellissima";
echo strlen($ciao),"\n";//17
$ciao = "Ciao\0bellissima";
echo strlen($ciao),"\n";//15

echo $ciao, "\n";//Ciaobellissima
printf($ciao);//Ciaobellissima
echo date("Y\0/m/d");//2016

include('.'.DIRECTORY_SEPARATOR."README.txt");//Così funziona
include('.'.DIRECTORY_SEPARATOR."README.txt\0.php");//Così no, da un errore. Penso abbiano sistemato
//Warning: include(): Failed opening './README.txt' for inclusion
// (include_path='.:/usr/share/php:/usr/share/pear')
// in /var/www/html/phpcert/Manual/Function_reference/Filter/null_meta_character.php
// on line 26