<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/14/14
 * Time: 7:30 PM
 */

 $a = range(1,2);
 $b = $a;
 var_dump($b);
/*
array(2) {
  [0]=>
  int(1)
  [1]=>
  int(2)
}
 */
 $b[0]++;
 $b[1]++;
 var_dump($a);
 var_dump($b);
/*
array(2) {
  [0]=>
  int(1)
  [1]=>
  int(2)
}
array(2) {
  [0]=>
  int(2)
  [1]=>
  int(3)
}
 */

/*
 * Assegnare un array ne crea una copia. ma attenzione, gli eventuali riferimenti interni
 * by reference, vengono copiati e mantenuti lo stesso!
 */

 $x =& $a[0];
 $c = $a;  //assegnazione normale
 var_dump($c);
/*
 * array(2) {
  [0]=>
  &int(1)
  [1]=>
  int(2)
}
 */
 $x++;
 var_dump($c);
/*
array(2) {
  [0]=>
  &int(2)
  [1]=>
  int(2)
}
 */
/*
 * questo vale anche per i passaggi by value (quindi senza &) degli array come parametri funzione
 */