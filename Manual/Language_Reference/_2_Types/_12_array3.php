<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/10/14
 * Time: 11:20 PM
 */
 $c = 'ciao';
 $c = (array) $c;
 var_dump($c);
/*
array(1) {
  [0] =>
  string(4) "ciao"
}
 */

 $c = (int) 10;
 $c = (array) $c;
 var_dump($c);
/*
array(1) {
  [0] =>
  int(10)
}
 */

 var_dump((array)(null));
/*
 * array(0) {
}
 */

/*
 * If an object is converted to an array, the result is an array whose
 * elements are the object's properties. The keys are the member variable names,
 * with a few notable exceptions:
 * integer properties are unaccessible; ??????
 * private variables have the class name prepended to the variable name;
 * protected variables have a '*' prepended to the variable name.
 * These prepended values have null bytes on either side.
 * This can result in some unexpected behaviour:
 *
 * ....\0 è il byte nullo
 */
class A {
    private $A; // This will become '\0A\0A'
    protected $C; //This will become *C
}

class B extends A {
    private $A; // This will become '\0B\0A'
    public $AA; // This will become 'AA'

    public $x;

    public function __construct() {
        $this->x = 100;
    }
}

$b = new B();
var_dump((array) $b);
/*
array(5) {
  '\0B\0A' =>
  NULL
  'AA' =>
  NULL
  'x' =>
  int(100)
  '\0*\0C' =>
  NULL
  '\0A\0A' =>
  NULL
}
 */

$b->intero = 10;
$b->stringa = "...";
$a = (array) $b;
var_dump($a);
/*
array(7) {
  '\0B\0A' =>
  NULL
  'AA' =>
  NULL
  'x' =>
  int(100)
  '\0*\0C' =>
  NULL
  '\0A\0A' =>
  NULL
  'intero' =>
  int(10)
  'stringa' =>
  string(3) "..."
}
*/
echo $a['x'],PHP_EOL; //100

$x = array(1,2,0=>3,4);
var_dump($x);
/*
array(3) {
  [0]=>
  int(3)
  [1]=>
  int(2)
  [2]=>
  int(4)
}
Il valore 1 non c'è. fondamentalmente carica l'array da sx a dx e 0=>3 fa un overwrite
 */

/*
 * Attenzione! L'assegnamento di un array crea una copia! sempre
 */

$arr1 = array(2, 3);
$arr2 = $arr1;
$arr2[] = 4; // $arr2 is changed,
var_dump($arr1);
// $arr1 is still array(2, 3)
/*
array(2) {
  [0] =>
  int(2)
  [1] =>
  int(3)
}
 */

$arr3 = &$arr1;
$arr3[] = 4; // now $arr1 and $arr3 are the same
var_dump($arr1);
/*
array(3) {
  [0] =>
  int(2)
  [1] =>
  int(3)
  [2] =>
  int(4)
}
 */