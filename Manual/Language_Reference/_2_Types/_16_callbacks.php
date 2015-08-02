<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 07/11/14
 * Time: 23.03
 */
 class a {
     public function prima() {
         echo __METHOD__,PHP_EOL;
     }

     public function prima_p($x) {
         echo __METHOD__,$x,PHP_EOL;
     }
 }

class b extends a {
    public function prima() {
        echo __METHOD__,PHP_EOL;
    }
}

 $a = new a();
 $b = new B();

 //call_user_func($a, 'prima');
 //PHP Warning:  call_user_func() expects parameter 1 to be a valid callback, no array or string given
 call_user_func(array($a, 'prima'));//a::prima
 call_user_func(array($a, 'prima_p'), 10);//a::prima_p10
 /*
  * Quindi il primo parametro può essere:
  * 1. una closure
  * 2. un array con due elementi: oggetto o classe/object o class method
  * 3. una stringa col nome della funzione
  * Dopo vengono i parametri, uno per posizione (NON in array)
  */