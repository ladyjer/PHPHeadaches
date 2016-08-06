<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/13/14
 * Time: 8:36 PM
 */

 var_dump($a); //Notice: Undefined variable: a
 $a =& $b;     //non da notice
 var_dump($a); //NULL, non da notice
 var_dump($b); //NULL, non da notice
 $b = 10;
 var_dump($a); //int(10)
 var_dump($b); //int(10)

 /*
  * Se non si inizializza una variabile, esistono dei valori di default
  * che dipendono dal contesto nel quale viene usata la variabile
  * bool -> false
  * int e float -> 0 o 0.0
  * array -> array()
  * string ->empty string
  */

  //The null character (also null terminator), abbreviated NUL
  if ('\0' ==  '') echo 'Sono uguali'; //non stampa
  if ('\0' === '') echo 'Sono uguali'; //non stampa
  if ('\0') echo 'CIAO',PHP_EOL; //stampa
  if ('') echo 'NON DICE CIAO';       //non stampa
  if (!'') echo '.......questo invece viene stampato',"\n";       //STAMPA
  $r = false;//se commento questa assegnazione, dopo si comporta nelle stesso modo,
             //salvo dare un notice
  echo "....",$r,PHP_EOL; //stampa solo ... poi va  a capo subito
  $r = true;
  echo "....",$r,PHP_EOL; //stampa ...1 poi va a capo

  $prova = true;
  $stringa = (string) $prova;
  echo "<<<<".$stringa,"\n";//<<<<1
  $prova = false;
  $stringa = (string) $prova; //viene tradotto nella stringa vuota
  echo "<<<<".$stringa,"\n";//<<<<

  $a = array(1, 2, 5=>'a', 6);
  var_dump($a);
/*
 * array(4) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [5]=>
  string(1) "a"
  [6]=>
  int(6)
}
 */

  $a = array(1, 2, 'u'=>'a', 6);
  var_dump($a);
/*
array(4) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  ["u"]=>
  string(1) "a"
  [2]=>
  int(6)
}
 */

  $undef_array[3] = 'ciao';
  var_dump($undef_array);
/*
array(1) {
  [3]=>
  string(4) "ciao"
}

 */

  $unsetint += 9;//PHP Notice:  Undefined variable: unsetint
  var_dump($unsetint);//int(9)
  $xxx = 0;
  $stringa = (string) $xxx;
  var_dump("-------".$stringa);//string(8) "-------0"

  $f = array('a');
  /*
   * Determina se una variabile è da considerare vuota.
   * Una variabile è considerata vuota se non esiste oppure se il suo valore è uguale a FALSE.
   * empty() non genera un avviso se la variabile non esiste.
   */
  if (empty($f)) echo "1.\n";//non stampa
  /*
   * Verifica se una variabile è definita e non è NULL.
   */
  if (isset($f)) echo "2.\n";//stampa

  $a = true;
  if (empty($a)) echo "E' empty",PHP_EOL;//non stampa nulla
  if (isset($a)) echo "E' setted",PHP_EOL;//E' setted