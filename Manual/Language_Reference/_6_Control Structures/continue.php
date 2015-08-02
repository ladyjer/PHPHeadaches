<?php
/**
 * Created by IntelliJ IDEA.
 * User: ColomboM
 * Date: 23/09/14
 * Time: 12.24
 */

 while (@++$i < 3) {
     echo "Giro $i\n";
     while (true) {
         continue 2;
         //continue 3; //Fatal error: Cannot break/continue 3 levels
         echo 'mai';
     }
     echo 'Mai';
 }

 echo 'E poi io';
 /*
  *
Giro 1
Giro 2
E poi io
  */