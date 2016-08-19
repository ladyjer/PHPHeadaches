<?php
/**
 * prova.php
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
$xml = <<<X
<books>
    <book id="1">PHP 5.5 in 42 Hours</book>
    <book id="2">Learning PHP 5.5 The Hard Way</book>
</books>
X;

$x = simplexml_load_string($xml);

$c = $x->children();
echo $c[1];//Learning PHP 5.5 The Hard Way
echo $x->xpath('/books/book[@id=2]')[0];//Learning PHP 5.5 The Hard Way
echo $x->book[1];//Learning PHP 5.5 The Hard Way