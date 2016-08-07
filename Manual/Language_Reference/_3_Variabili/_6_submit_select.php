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

<form method="get" xmlns="http://www.w3.org/1999/html">
	<select name="accetto">
       <option>uno</option>
       <option>due</option>
    </select>
	<button type="submit" value="ok">OK</button>
</form>

<?php
 /*
  * anche se non c'è il valore settato
array (size=1)
  'accetto' => string 'uno' (length=3)
  */
?>
