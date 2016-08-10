<?php
/**
 * _2_basics.php
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


define ('CIAO', 'BAU');
define ('RICIAO', CIAO.' '.CIAO);

const CIRICIAO = 'RICIAO';//. "....";//DA PARSE ERROR CON <=5.5 FUNZIONA DAL 5.6 IN POI

echo CIAO, RICIAO, CIRICIAO;//BAUBAU BAURICIAO

$altro=<<<X
CIAO
X;

define('ALTRO', $altro);//CIAO
echo ALTRO;

/*
 * Funziona con heredow e nowdoc se non contengono variabili
 */
