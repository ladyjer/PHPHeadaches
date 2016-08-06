<?php
/**
 * similar_text.php
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

$b = 'MIAO';
$a = 'CIAOooo';

echo similar_text($a, $b);//3
echo similar_text($b, $a);//3

$c = 10;
echo similar_text($b, $a, $c);//3


//The Levenshtein distance is defined as the minimal number of
//characters you have to replace, insert or delete to transform str1 into str2.
echo levenshtein($a, $b);//4

//Soundex keys have the property that words pronounced similarly produce the same soundex key,
// and can thus be used to simplify searches in databases where you know the pronunciation but not the spelling.
// This soundex function returns a string 4 characters long, starting with a letter.
echo soudex($a);//C000
echo soudex($b);//M000