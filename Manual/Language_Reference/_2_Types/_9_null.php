<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/11/14
 * Time: 10:53 PM
 *
 * The special NULL value represents a variable with no value. NULL is the only possible value of type null.
 */

 /*
  * Finds whether a variable is NULL
  * E' truè se la variabile è = null oppure non esiste
  */
 if (is_null($a)) echo "1 E' null\n";  //Stampa la scritta "1E' null" + PHP Notice:  Undefined variable: a
 $a = 10;
 if (is_null($a)) echo "2E' null\n";  //non stampa
 //cast to null si fa usando (unset)
 if (is_null((unset) $a)) echo "4E' null\n"; //stampa (senza notice)
 //attenzione! il cast to unset è uguale a = null
 //non si distrugge la variabile, per quello va usata la function unset(...)
 /*
  * Casting a variable to null using (unset) $var will not remove
  * the variable or unset its value. It will only return a NULL value.
  */
 if (is_null($a)) echo "5E' null\n";  //NON stampa NULLA
 unset($a);
 if (is_null($a)) echo "3E' null\n";  //Stampa la frase +  PHP Notice:  Undefined variable: a
