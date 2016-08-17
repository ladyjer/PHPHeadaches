<?php
/**
 * _6_abstract_class.php
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

class x {}

class y extends x {}

class z extends y {}

abstract class a {
	abstract function ciao(y $y);
	abstract function ciaone(y $y, $x = 0);
	abstract function ciaone2(y $y, $x);
}

abstract class b extends a {
	function ciao(Y $y) {
		echo "Perfetto";
	}

    //Fatal error: Declaration of b::ciaone() must be compatible with a::ciaone(y $y, $x = 0)
	/*function ciaone(Y $y, $x) {

	}*/

	function ciaone2(y $y, $x = 0) {
        // This is compatible! Ok!
	}
}

abstract class c extends a {
	// Fatal error: Declaration of c::ciao() must be compatible with a::ciao(y $y)
	/*function ciao(Z $z) {
		echo "NOOOOOO";
	}*/
}

abstract class d extends a {
	//Fatal error: Declaration of d::ciao() must be compatible with a::ciao(y $y)
	/* function ciao(X $x) {
		echo "NOOOOOOOO";
	}*/
}