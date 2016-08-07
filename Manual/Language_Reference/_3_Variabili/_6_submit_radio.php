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
    <input type="radio" name="gender" value="male"> Male<br>
    <input type="radio" name="gender" value="female"> Female<br>
    <input type="radio" name="gender" value="other"> Other
	<button type="submit" value="ok">OK</button>
</form>

<?php
 /*
  * Se seleziono other:
  * array (size=1)
  'gender' => string 'other' (length=5)

  * se non seleziono nient:
  *
  * array (size=0)
  empty
  */
?>
