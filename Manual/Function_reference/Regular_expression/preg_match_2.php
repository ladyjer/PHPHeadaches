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

// preg_match() returns 1 if the pattern matches given subject, 0 if it does not, or FALSE if an error occurred.
// La lettera "i" dopo i delimitatori indica una ricerca case-insensitive
if (preg_match("/php/i", "PHP è il linguaggio scelto.", $matches))
{
	echo "Il riconoscimento è avvenuto."; //vero
} else
{
	echo "Testo non riconosciuto.";
}

var_dump($matches);

/*
 * array (size=1)
  0 => string 'PHP' (length=3)
 */

// La lettera "i" dopo i delimitatori indica una ricerca case-insensitive
if (preg_match("/php/i", "PHP è il linguaggio scelto, php er meglio.", $matches))
{
	echo "Il riconoscimento è avvenuto."; //vero
} else
{
	echo "Testo non riconosciuto.";
}

var_dump($matches);

/*
 * array (size=1)
  0 => string 'PHP' (length=3)
 */

// Returns the number of full pattern matches (which might be zero), or FALSE if an error occurred.
// La lettera "i" dopo i delimitatori indica una ricerca case-insensitive
if (preg_match_all("/php/i", "PHP è il linguaggio scelto, php er meglio.", $matches))
{
	echo "Il riconoscimento è avvenuto."; //vero
} else
{
	echo "Testo non riconosciuto.";
}

var_dump($matches);

/*
array (size=1)
  0 =>
    array (size=2)
      0 => string 'PHP' (length=3)
      1 => string 'php' (length=3)
 */

// Questa sotto da warning
// Warning: preg_match(): Unknown modifier 'g'
// per attivarla usare la versione _all
if (preg_match("/php/ig", "PHP è il linguaggio scelto, php er meglio.", $matches))
{
	echo "Il riconoscimento è avvenuto."; //vero
} else
{
	echo "Testo non riconosciuto.";
}