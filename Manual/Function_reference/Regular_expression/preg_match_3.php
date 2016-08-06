<?php
/**
 * preg_match.php
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

$re = "/(?<cippa>PHP)/i";
$str = "Il php mi piace, veramente php";

echo preg_match_all($re, $str, $matches);//2

var_dump($matches);

/*
 * Orders results so that $matches[0] is an array of full pattern matches,
 *  $matches[1] is an array of strings matched by the first parenthesized subpattern, and so on.
 * io ho dato un nome al gruppo, quindi l'array[1] me lo trovo uguale come array['cippa']

 *
array (size=3)
  0 =>
    array (size=2)
      0 => string 'php' (length=3)
      1 => string 'php' (length=3)
  'cippa' =>
    array (size=2)
      0 => string 'php' (length=3)
      1 => string 'php' (length=3)
  1 =>
    array (size=2)
      0 => string 'php' (length=3)
      1 => string 'php' (length=3)

 */