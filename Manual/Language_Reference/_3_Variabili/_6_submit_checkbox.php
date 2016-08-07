<?php
/**
 * _6_submit_checkbox.php
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


var_dump($_GET);

?>

<form method="get">
	<input type="checkbox" name="accetto"/>
	<button type="submit" value="ok">OK</button>
</form>

<?php
 /*
  * Se lo seleziono:
  * array (size=1)
  'accetto' => string 'on' (length=2)

  * se non lo seleziono:
  *
  * array (size=0)
  empty
  */
?>
