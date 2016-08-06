<?php
/**
 * replace.php
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

$frase = "Ciao bel bel mondo";
$da = ['bel', 'mondo'];
$a = ['brutto', 'tutto'];

echo str_replace($da, $a, $frase, $quanti), "\n";//Ciao brutto brutto tutto
echo $quanti, "\n";// 3

$da = "bel";
$a = "brutto";

echo str_replace($da, $a, $frase, $quanti), "\n";//Ciao brutto brutto mondo
echo $quanti;// 2

//substr_replace :  Replace text within a portion of a string

$frase = "Ciao bel bel mondo";
echo substr_replace($frase, "bello", 5), "\n";//Ciao bello
echo substr_replace($frase, "bello", 5, 3), "\n";//Ciao bello bel mondo

echo strtr("Ciao", "iao", "IAO");//CIAO
echo strtr("Ciao", array("i"=>"I", "a" => "A", "o" => "O"));//CIAO
echo strtr("Ciao", "ia", "IAO");//CIAo
echo strtr("Ciao", "iao", "IA");//CIAo
