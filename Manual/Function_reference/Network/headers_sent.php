<?php
/**
 * headers_sent.php
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

// If no headers are sent, send one
if (!headers_sent()) {
	header('Location: http://www.example.com/');
	exit;
}
// An example using the optional file and line parameters, as of PHP 4.3.0
// Note that $filename and $linenum are passed in for later use.
// Do not assign them values beforehand.
if (!headers_sent($filename, $linenum)) {
	header('Location: http://www.example.com/');
	exit;

// You would most likely trigger an error here.
} else {

	echo "Headers already sent in $filename on line $linenum\n" .
		"Cannot redirect, for now please click this <a " .
		"href=\"http://www.example.com\">link</a> instead\n";
	exit;
}

?>
