<?php
/**
 * come_aggirare_le_convenzioni.php
 *
 * PHP version 5
 *
 * @category    Joomla_Components
 * @package     Joomla.Administrator
 * @subpackage  Com_Sogeco
 * @author      Mariella Colombo <mariella.colombo@ladyj.eu>
 * @copyright   Copyright © 2016 Colombo Mariella
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @link        http://www.ladyj.eu
 */

$x = '123';
$$x = '12';

echo ${123};//12!!! è come se la variabile $123 esistesse davvero....

$falsa = false;
if (isset($falsa)) {
	echo "Questa stampa"; //isset è vero se la variabile esiste e non ha valore null;
}

if (!null) {
	echo "Anche questa stampa";//null è uno dei valori FALSE
}

// empty è vera se la variabile contiene null o un qualsiasi valore equivalente a false
if (empty($z)) {//Non resittiuscire un notice
	echo "E pure questa";
}