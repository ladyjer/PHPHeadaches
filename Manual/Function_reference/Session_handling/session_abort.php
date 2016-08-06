<?php
/**
 * session_abort.php
 *
 * PHP Version 5
 *
 * @category    Joomla_Component
 * @package     php-cert
 * @subpackage  Com_sogemarpns
 * @author      Mariella <mariella.colombo@ladyj.eu>
 * @copyright   Copyright (C) 2005 - 2016 Sogemar Srl, Inc. All rights reserved.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link        http://www.ladyj.eu
 * @since       Joomla 3.x
 *
 * session_abort() finishes session without saving data. Thus the original values in session data are kept.
 */

session_start();

if (empty($_SESSION['cnt'])) {
    $_SESSION['cnt'] = 0;
}
$_SESSION['cnt']++;
?>

<p>
    Hello visitor, you have seen this page <?php echo $_SESSION['cnt']; ?> times.
</p>

<?php
echo 'cioa';
session_abort(); // sembra che lo script finisca qui ....
echo 'cioa';
?>

<p>
    Hello visitor, you have seen this page <?php echo $_SESSION['cnt']; ?> times.
</p>

