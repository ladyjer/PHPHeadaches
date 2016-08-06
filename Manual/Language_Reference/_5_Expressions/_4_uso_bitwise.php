<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/19/14
 * Time: 12:18 PM
 */

 /*
  * se gli operatori sono strighe, gli operatori vengono applicati ai valori ascii, e il risultato sarà stringa
  * in tutti gli altri casi gli operatori verranno convertiti in interi e il risultato sarà intero
  * QUESTO USO E' VALIDO SOLO PER LE POTENZE DI 2, non posso usare come codice 3,4,5,6,....
  */

 const E_SIMPATICA    = 0;
 const E_BIONDA       = 1;
 const E_MORA         = 2;
 const E_RICCA        = 4;
 const E_INTELLIGENTE = 8;
 const E_CASALINGA    = 16;
 const E_INGLESE      = 32;
 const E_ITALIANA     = 64;  //2**6
 $E_STRANIERA         = ~E_ITALIANA;


 echo "MARI ------------------------ \n";
 $mari = E_ITALIANA | E_MORA ;
 var_dump(decbin(E_ITALIANA));                                                             //string(7) "1000000"
 var_dump(decbin(E_MORA));                                                                 //string(2)      "10"
 var_dump(decbin($mari));                                                                  //string(7) "1000010"
 var_dump(decbin(~$E_STRANIERA));//string(7)                                                           "1000000"
 var_dump(decbin($E_STRANIERA)); //string(64) "1111111111111111111111111111111111111111111111111111111110111111"
 if ($mari & ~$E_STRANIERA)  echo "Mari non è straniera\n"; //stampa
 var_dump(decbin($mari & ~$E_STRANIERA));                                                 //string(7)  "1000000"
 echo "......................................",PHP_EOL;
 var_dump(decbin($mari));                                                                  //string(7) "1000010"
 var_dump(decbin($E_STRANIERA));//string(7)   "1111111111111111111111111111111111111111111111111111111110111111"
 if ($mari & $E_STRANIERA)   echo "Mari è straniera\n";    //stampa ... NON FUNZIONA COME VORREI
 var_dump(decbin($mari & $E_STRANIERA));                                                  //string(2)      "10"
 echo "......................................",PHP_EOL;

 if ($mari & E_INTELLIGENTE) echo "Mari è intelligente\n";  //non stampa
 echo "GINA ------------------------ \n";
 $gina = E_INGLESE | E_BIONDA;
 var_dump(decbin(E_INGLESE));   //string(6)                                                            "100000"
 var_dump(decbin(E_BIONDA));    //string(1)                                                                 "1"
 var_dump(decbin($gina));       //string(6)                                                            "100001"
                                //           "0000000000000000000000000000000000000000000000000000000000100001"
 var_dump(decbin($E_STRANIERA));//string(64) "1111111111111111111111111111111111111111111111111111111110111111" //ha tutti 1 tranne il 6°
 if ($gina & $E_STRANIERA)   echo "Gina è straniera\n";//stampa
 var_dump(decbin($gina & $E_STRANIERA));//string(6)                                                    "100001"

 var_dump(E_ALL);    //int(32767)
 var_dump(E_NOTICE); //int(8)      2**3
 var_dump(E_STRICT); //int(2048)   2**11
 var_dump(E_DEPRECATED);//int(8192)2**13