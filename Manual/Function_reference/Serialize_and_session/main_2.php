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
session_start();

$a = $_SESSION['a'];
var_dump($a);
/*
object(__PHP_Incomplete_Class)[1]
  public '__PHP_Incomplete_Class_Name' => string 'a' (length=1)
  private 'x' (a) => int 100
 */
?>