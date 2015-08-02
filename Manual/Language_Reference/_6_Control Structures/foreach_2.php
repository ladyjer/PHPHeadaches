<?php
/**
 * Created by IntelliJ IDEA.
 * User: ColomboM
 * Date: 23/09/14
 * Time: 12.06
 */

 var_dump($value); //NULL - Notice: Undefined variable: value

 $a = range(1,3);
 foreach($a as $value) {
     ;
 }
 var_dump($value); //int(3)
 /*
  * Value sopravvive. Andrebbe fatto unset
  */
 unset($value);
 var_dump($value); //NULL - Notice: Undefined variable: value
 /*
  * NON si possono sopprimere gli errori con @
  */


