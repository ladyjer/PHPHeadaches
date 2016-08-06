<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 22/02/15
 * Time: 19.27
 */
 define('UNO', 1);
 $a = range(1,5);
 echo "Ciao {$a[0]}\n"; //Ciao 1
 $b = 1;
 echo "Ciao {$a[$b]}\n"; //Ciao 2
 echo "Ciao $a[$b]\n";   //Ciao 2
 //all'interno degli "" le constanti vengono interpolate solo se si trovano tra {}
 echo "Ciao $a[UNO]\n";//Ciao + PHP Notice:  Undefined index: UNO
 echo "Ciao {$a[UNO]}\n";//Ciao 2
 echo "UNO\n";//UNO
 echo "{UNO}\n";//{UNO}
 /*
  * Dal manuale
  * Note: To reiterate, inside a double-quoted string, it's valid to not surround array indexes with quotes so "$foo[bar]" is valid.
  */
 $a["UNO"] = 'CIAO';
 var_dump($a);
/*
array(6) {
  [0] =>
  int(1)
  [1] =>
  int(2)
  [2] =>
  int(3)
  [3] =>
  int(4)
  [4] =>
  int(5)
  'UNO' =>
  string(4) "CIAO"
}
 */
  echo "$a[UNO]", "\n";   //CIAO
  //echo "$a['UNO']", "\n";   //PHP Parse error:  syntax error, unexpected
  echo "{$a[UNO]}", "\n"; //2
  echo "{$a['UNO']}", "\n"; //CIAO