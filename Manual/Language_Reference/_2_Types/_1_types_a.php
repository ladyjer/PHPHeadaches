<?php
/*
 * The type of a variable is not usually set by the programmer;
 * rather, it is decided at runtime by PHP depending
 * on the context in which that variable is used.
 */

 $a = 0;
 echo gettype($a), "\n";
 echo gettype('13' + '2.0'), "\n";

 if (is_float('13' + '2.0')) echo "1. It's double!\n";
 if (is_float(2.0)) echo "2. It's double!\n";
 $d = 2.5;
 if (is_float($d)) echo "3. It's double!\n";

/*
integer
double
1. It's double!
2. It's double!
3. It's double!
 */
