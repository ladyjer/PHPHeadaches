<?php
 /*
  * Le conversioni da un tipo a float passano prima da int
  * tipo -> int -> float
  * dal PHP5 scatta un notice se converto un oggetto verso float o int
  */
  class Ciao {
      public $a = 0;
  }
  $c = new Ciao;
  $s = (int) $c; //Notice: Object of class Ciao could not be converted to int
  var_dump($s);//int(1)
  $s = (float) $c; //Notice: Object of class Ciao could not be converted to float
  var_dump($s);//double(1)

  /*
   * Abbiamo capito che non si possono confrontare direttamente due float
   * possiamo però usare the 'machine epsilon' detto anche 'unit roundoff',
   * che è la differenza più piccola accettabile nei calcoli
   *
    1 + epsilon is the smallest number greater than 1
    that a computer will distinguish from 1.
    |x| + epsilon can be used to estimate the error bound
    on a computer's representation of a floating point number.
    It is called "machine" epsilon because the value is machine dependent.
    Here is some code you can use to compute machine epsilon:
    */
    /**
    * Returns the machine epsilon value
    */
    function getMachineEpsilon() {
      $eps=1.0;
      while($eps+1.0 > 1.0)
        $eps=$eps/2.0;
      $eps*=2.0;
      return $eps;
    }
    var_dump(getMachineEpsilon());//double(2.2204460492503E-16)
    $eps = 2.2204460492503E-16;
    $r = 1.0;
    $r += $eps;
    if (1.0 < $r) echo "E' minore!!!\n"; //viene stampato

    $eps = 2.2204460492503E-17;//rimpicciolisco l'eps
    $r = 1.0;
    $r += $eps;
    if (1.0 < $r) echo "E' minore!!!"; //NON viene stampato
    if (1.0 == $r) echo "Sono uguali\n"; //viene stampato