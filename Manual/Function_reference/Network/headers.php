<?php
/**
 * headers.php
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


var_dump(get_headers('http://www.ilpost.it', 1));

/*
array (size=9)
  0 => string 'HTTP/1.0 200 OK' (length=15)
  'Server' => string 'Apache' (length=6)
  'Access-Control-Allow-Origin' => string 'http://flashes.ilpost.it' (length=24)
  'X-Pingback' => string 'http://www.ilpost.it/xmlrpc.php' (length=31)
  'Content-Type' => string 'text/html; charset=UTF-8' (length=24)
  'Cache-Control' => string 'max-age=10' (length=10)
  'Expires' => string 'Sat, 06 Aug 2016 21:21:49 GMT' (length=29)
  'Date' => string 'Sat, 06 Aug 2016 21:21:39 GMT' (length=29)
  'Connection' => string 'close' (length=5)
 */