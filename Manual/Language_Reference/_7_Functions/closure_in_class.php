<?php
/**
 * xxx.php
 *
 * PHP Version 5
 *
 * @category    Joomla_Component
 * @package     sogemar_esterno3x
 * @subpackage  Com_sogemarpns
 * @author      Mariella <mariella.colombo@ladyj.eu>
 * @copyright   Copyright (C) 2005 - 2016 Sogemar Srl, Inc. All rights reserved.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link        http://www.ladyj.eu
 * @since       Joomla 3.x
 */

class A {

    private $foo;
    
    public function __construct($foo) {
        $this->foo = $foo;
    }
    
    public function bar() {
        return function($x) {
            // Viene eseguita questa
            return $this->foo * $x;
        };
    }
}

$a = new A(2);
$a->bar = function($x) {
  // Questa non viene mai eseguita
  return $x * $x;  
};
// $a è una closure
$m = $a->bar();
// $m è una closure
echo $m(3); // 6
