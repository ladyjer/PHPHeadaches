<?php
/**
 * Created by IntelliJ IDEA.
 * User: ColomboM
 * Date: 09/09/14
 * Time: 11.16
 */
 $ciao = 'Mamma';
 echo $ciao[1], "\n";   //a
 echo $ciao{1}, "\n";   //a, funziona anche con {}
 echo "....",$ciao[-1], "----\n";  //....---- + Notice: Uninitialized STRING offset: -1
 $ciao[-1] = 'P';//Warning: Illegal STRING offset:  -1
 $ciao[10] = '.';
 echo $ciao, "\n"; //Mamma     .   (offset pad with spaces)

 $ciao['1'] = 'A';
 var_dump($ciao); //string(11) "MAmma     ."
 echo (int) 'a', "\n";//0
 $ciao['a'] = 'X';
 var_dump($ciao); //string(11) "XAmma     ."  (cast di 'a' a 0)
 $ciao['2s'] = 'Y';
 var_dump($ciao); //string(11) "XAYma     ."
 $più = "a" + "b";
 var_dump($più);//int(0)

 var_dump(strval(89899));//string(5) "89899"
 var_dump(strval(false));//string(0) ""
 var_dump(strval(true));//string(1) "1"
 var_dump(strval(array()));//string(5) "Array"
 $o = new stdClass();
 //var_dump(strval($o));//PHP Catchable fatal error:  Object of class stdClass could not be converted to string (ERA FATTIBILE
                                    //col PHP4 e restituiva "Object"
 class a {
    public function __toString() {
        return "ciao";
    }
 }
 var_dump(strval(new a())); //string(4) "ciao"
 var_dump(strval(null));//string(0) ""


