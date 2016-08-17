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

function carica($classname) {
	include_once __DIR__.DIRECTORY_SEPARATOR.'a.php';
}

spl_autoload_register('carica');

session_start();
$a = new a();
$_SESSION['a'] = $a;
echo session_id();
echo ini_get('session.save_path');
?>

<a href="main_2.php">vai2</a><br />
<a href="main_3.php">vai3</a>
