<?php
/**
 * fopen.php
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
//resource fopen ( string $filename , string $mode [, bool $use_include_path = false [, resource $context ]] )

/*
If filename is of the form "scheme://...", it is assumed to be a URL and PHP will search
for a protocol handler (also known as a wrapper) for that scheme. If no wrappers for that protocol are registered,
PHP will emit a notice to help you track potential problems in your script and then continue as though filename specifies a regular file.
 */
