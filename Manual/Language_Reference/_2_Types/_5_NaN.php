<?php
/**
 * Created by IntelliJ IDEA.
 * User: ColomboM
 * Date: 05/09/14
 * Time: 14.46
 */
 $n = acos(1.01);//valore non rappresentabile in floating point
 if (is_nan($n)) echo "Is NAN\n";
 var_dump($n);//float(NAN)
 /*
  * L'infinito (10/0) NON è considerato NAN
  */
 /*
  * Because NAN represents any number of different values,
  * NAN should not be compared to other values,
  * including itself, and instead should be checked for using is_nan().
  */
 if ($n == NaN) echo "Questo non viene stampato!";
 if (is_nan($n)) echo "Questo si che viene stampato!";