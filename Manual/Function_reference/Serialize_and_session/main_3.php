<?php
/**
 * main.php
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
?>
CIAO
<?php
/***** AGGGIUNGO AUTOLOAD ********/
function carica($classname) {
    include_once __DIR__.DIRECTORY_SEPARATOR.'a.php';
}

spl_autoload_register('carica');
/*********************************/
session_start();

$a = $_SESSION['a'];
var_dump($a);
/*
object(a)[1]
  private 'x' => int 100
?>