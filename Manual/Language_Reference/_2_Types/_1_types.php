<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/4/14
 * Time: 2:00 PM
 */
 var_dump(-1> false); //bool(true)
 var_dump(-100000000000000000001>false); //bool(true)
 //il valore false è sempre il + piccolo
 $a = 0;
 echo gettype($a), "\n"; //integer
 $a = 0.0;
 echo gettype($a), "\n"; //double
 echo gettype($c), "\n"; //stampa NULL  + PHP Notice:  Undefined variable: c

 echo PHP_INT_SIZE, "\n", PHP_INT_MAX, "\n"; //4 2147483647 (oppure 8 - 9223372036854775807)
 /*
  * PHP INT_SIZE da 4. cioè ogni intero è fatto da 4 byte, da 8 bit l'uno
  * quindi 4*8 = 32.
  * Su una macchina a 64bit risponde 8 9223372036854775807
  * Considerando che un bit si usa per il segno, e devo rapprensentare anche lo 0,
  * il MAX_INT è ((2 alla 31) - 1), cioè proprio 2147483647
  */
 $a = PHP_INT_MAX + 1;
 var_dump($a);//double(9.2233720368548E+18)
 $a = 8 / 2;
 var_dump($a);//int(4)
 $a = 10 / 3;
 var_dump($a);//double(3.3333333333333)
 $a = 10 / 4;
 var_dump($a);//double(2.5)
 var_dump((int) $a);//int(2) : always downward
 var_dump(round($a));//double(3)
 var_dump(intval($a));//int(2)

 $x = false;
 $y = true;
 echo (int)$x, " " ,(int)$y, "\n";  // 0 1

 $k = 2.7;
 $u = (int) $k;
 var_dump($u); //int(2), always downward
 $t = PHP_INT_MAX + 1; //quindi double, un numero + grande di quanto un int possa contenere
 var_dump($t); //double(9.2233720368548E+18)
 $u = (int) $t;
 var_dump($u);//int(999) risultato imprevedibile, nessun notice e nemmeno warning tra la'ltro
              //su mac int(-9223372036854775808)

 /*
  * Oggetto false
  */
 class Ciao {
     public $a;

     public function parla() {

     }
 }

 class Ciao2
 {
     public function parla()
     {

     }
 }

 class CiaoIdiot {}

 $n = new Ciao();
 if ($n) echo "E' true\n"; //stampa è true
 $n->a = 'o';
 if ($n) echo "E' true\n"; //stampa è true
 unset($n->a);
 if ($n) echo "E' true\n"; //stampa è true ancora
 $n = new Ciao2();
 if ($n) echo "E' true anche Ciao2\n"; //E' true anche Ciao2
 $n = new CiaoIdiot();
 if ($n) echo "E' true anche CiaoIdiot\n"; //E' true anche CiaoIdiot
 /*
  * Diciamo che un oggetto non diventa mai false. Lo faceva con il PHP 4
  * quando non c'erano più variabili nell'oggetto
  */
 echo PHP_VERSION, "\n"; //5.3.1
 echo PHP_VERSION_ID, "\n";    //50301
  /*
   * Le dimensioni dei float dipendono dalla piattaforam. di solito la precisione
   * dopo la virgola è di 4 cifre (64bit IEEE format)
   * numeri come 0.1 o 0.7 non riscono ad essere rappresentati correttamente
   * in binario, scatenando casini di questo genere:
   */
  $y = floor((0.1+0.7)* 10); //(0.1+0.7)*10 ha una rappresentazione interna
                             //che assomiglia a 7.99999999991118
  var_dump($y);//double(7)
  /*
   * float floor ( float $value )
   */

  /*
   * Non bisogna mai fidarsi dei float fino all'ultimo decimal2,
   * e non bisogna mai confrontarli per uguaglianza direttamente
   */
  if (0.8 == (0.1+0.7)) echo "Funziona!\n"; //non stampa nulla, da false
  /*
   * BCMath : BCMath Arbitrary Precision Mathematics
   * Se serve bisogna usare BC MAth Functions oppure GMP functions
   */
  var_dump(bcadd('0.1', '0.7', 1));//string(4) "0.8"
  //string bcadd ( string $left_operand , string $right_operand [, int $scale ] )
  $r = (float)bcadd('0.1', '0.7', 1);//restituisce una stringa da solo
  var_dump($r); //double(0.8)

