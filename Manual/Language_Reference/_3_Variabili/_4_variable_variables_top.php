<?php
 $a = 'c';
 $c = 10;

 echo "{$$a}", "\n";//
 echo "{\$\$a} è {$$a}","\n"; //{$$a} è 10
 echo "Funziona anche così {${$a}}",PHP_EOL;
 /*
  * Per gli array $$a[1] va risolto, con:
  * ${$a}[1]
  *   oppure
  * ${$a[1]}
  *
  * Si può fare anche $foo->{$cmp}[1]
  *   oppure
  *                   $foo->{$cmp[1]} che sono due cose diverse
  *
  *                   la seconda si può scrivere anche direttamente
  *                   $foo->$cmp[1]
  *
  *                   la prima è il campo di $foo di tipo array
  *                   il cui nome è $cmp, il secondo elemento
  *                   la seconda la proprietà di $foo da prendere è
  *                   la seconda dell'array $cmp
  */

  /*
   * Non si possono referenziare dinamicamente $this e le superglobales!!
   */

  echo $_SERVER['REQUEST_TIME'], "\n";
  $x = '$_SERVER[\'REQUEST_TIME\']';
  echo $$x;//Notice: Undefined variable: $_SERVER['REQUEST_TIME']
