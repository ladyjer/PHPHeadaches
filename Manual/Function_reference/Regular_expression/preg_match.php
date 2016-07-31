<?php
/**
 * preg_match.php
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

// La lettera "i" dopo i delimitatori indica una ricerca case-insensitive
if (preg_match("/php/i", "PHP è il linguaggio scelto.", $matches)) {
    echo "Il riconoscimento è avvenuto."; //vero
} else {
    echo "Testo non riconosciuto.";
}

var_dump($matches);