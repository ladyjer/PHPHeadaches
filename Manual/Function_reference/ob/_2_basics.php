<?php
/**
 * _1_basics.php
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

ob_start();
echo "Primo buffer<br>";
ob_start();
echo "Secondo buffer<br>";
flush();
/*
 * Primo buffer
 * Secondo buffer
 */
$x = ob_get_contents();
echo "... $x ...";
/*
... Secondo buffer
...
 */
/*
 * Significa che il flush da solo scarica tutto l'output ma non svuota i buffer.
 * Proviamo a chiamarlo ancora.
 */
flush();// No non scarica ancora.
$x = ob_get_contents();
echo "... $x ...";
/*
 * Il contenuto c'è ancora
... Secondo buffer
...
 */
var_dump(ob_get_status());
ob_flush();// Anche questo non produce output, anche se il contenuto c'è ancora
$x = ob_get_contents();
echo "... $x ...";
/*
 * Non c'è più nessun contenuto chiamando ob_flush
 */