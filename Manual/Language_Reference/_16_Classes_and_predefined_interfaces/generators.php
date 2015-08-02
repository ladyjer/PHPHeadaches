<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 01/11/14
 * Time: 15.58
 *
 * Non possono essere instanziati con un new
 *
 * Ripasso su cosa sono i generators
 */
 function generatore() {
     yield 1;
     yield 2 => 'ciao';
     yield 3;
 }
 $g = generatore();
 foreach ($g as $k => $v) {
     echo $k,'-',$v,PHP_EOL;
 }
/*
0-1
2-ciao
3-3
 */

/*
 * Classe Generator
 */
 var_dump($g);
/*
object(Generator)#2 (0) {
}
 * NB. Il numero # è il numero di oggetti creati fino ad ora di quel tipo
 * count is the number of objects / zval's for objects irrespective
 * of which class it belongs to that has been
 * created till now. Which keeps getting incrementing for every object created
 * & gets decremented by 1 when a refcount of a zval reaches zero i.e. Garbage Collection.
 *
 Generator implements Iterator {
/* Methods
public mixed current ( void )
public mixed key ( void )
public void next ( void )
public void rewind ( void )
public mixed send ( mixed $value )
public mixed throw ( Exception $exception )
public bool valid ( void )
public void __wakeup ( void )
}
 */

 function g1() {
     global $i;
     if ($i == 10) {
         echo '.......',yield , PHP_EOL;
     }
 }

 $i = 1;
 $f = g1();
 $f->send('Ciao');//non stampa nulla
 $f->next(); //ne next ne rewind sbloccano la situazione
 $f->rewind();
 $i = 10;
 $f->send('Ciao');//non stampa nulla lo stesso, è come se si accodasse. La la prima non arriverà mai a yield,
 //e così resterà bloccata anche la seconda

 function g2() {
     echo 'prima',PHP_EOL;
     try {
         echo yield, PHP_EOL;
     } catch (Exception $e) {
         echo 'Eccezione ' . $e->getMessage(), PHP_EOL;
     }
     echo 'dopo';
 }

 $x = g2();
 if ($x->valid()) echo 'Il generatore è aperto',PHP_EOL;//stampa
 $x->rewind();//prima
 // da qui in poi è in attesa di un valore. o glielo do o  lancio l'eccezione (in ogni caso senza send
 //o throw la scritta dopo non si vede
 //$x->send('10'); //stampa 10 e poi dopo
 $x->throw(new Exception('stoppati'));//stampa eccezione stoppati e dopo
 // If the generator is already closed when this method is invoked, the exception will be thrown in the caller's context instead.
 //$x->throw(new Exception('stoppati'));//PHP Fatal error:  Uncaught exception 'Exception' with message 'stoppati'
 if ($x->valid()) echo 'Il generatore è aperto',PHP_EOL;//non stampa, ha finito
