<?php
/**
 * index.php
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
//all' url è stato aggiunto il parametro &ciao=mia<>o

echo (int) (filter_has_var(INPUT_GET, 'ciao')); //1
echo (int) (filter_has_var(INPUT_GET, 'ciap')); //0

/* data actually came from POST
$_POST = array(
    'product_id'    => 'libgd<script>',
    'component'     => '10',
    'versions'      => '2.0.33',
    'testscalar'    => array('2', '23', '10', '12'),
    'testarray'     => '2',
);
*/

$args = array(
	'product_id'   => FILTER_SANITIZE_ENCODED,
	'component'    => array('filter'    => FILTER_VALIDATE_INT,
		'flags'     => FILTER_REQUIRE_ARRAY,
		'options'   => array('min_range' => 1, 'max_range' => 10)
	),
	'versions'     => FILTER_SANITIZE_ENCODED,
	'doesnotexist' => FILTER_VALIDATE_INT,
	'testscalar'   => array(
		'filter' => FILTER_VALIDATE_INT,
		'flags'  => FILTER_REQUIRE_SCALAR,
	),
	'testarray'    => array(
		'filter' => FILTER_VALIDATE_INT,
		'flags'  => FILTER_REQUIRE_ARRAY,
	)

);

$myinputs = filter_input_array(INPUT_POST, $args);

var_dump($myinputs);

/*
array(6) {
  ["product_id"]=>
  array(1) {
    [0]=>
    string(17) "libgd%3Cscript%3E"
  }
  ["component"]=>
  array(1) {
    [0]=>
    int(10)
  }
  ["versions"]=>
  array(1) {
    [0]=>
    string(6) "2.0.33"
  }
  ["doesnotexist"]=>
  NULL
  ["testscalar"]=>
  bool(false)
  ["testarray"]=>
  array(1) {
    [0]=>
    int(2)
  }
}
 */

/*
 * filter_input e filter_input_array
 * Esistono le parallele filter_var e filter_var_array che lavorano
 * sulle variabili nomrali, mentre la prima coppia lavora sulle variabilie esterne
 */