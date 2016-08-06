<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/22/14
 * Time: 11:56 PM
 */
 function genera() {
     for ($i = 0; $i<4; $i++) {
        echo 'inizio giro generatore ' , $i, PHP_EOL;
        yield $i;
        echo 'fine giro generatore ' , $i, PHP_EOL, PHP_EOL;
     }
     echo 'Fine della funzione di generazione';
 }

 foreach (genera() as $k => $v) {
     echo 'inizio del giro',PHP_EOL;
     echo $k,'-',$v,PHP_EOL;
     echo 'fine del giro',PHP_EOL;
 }

/*
inizio giro generatore 0
inizio del giro
0-0
fine del giro
fine giro generatore 0

inizio giro generatore 1
inizio del giro
1-1
fine del giro
fine giro generatore 1

inizio giro generatore 2
inizio del giro
2-2
fine del giro
fine giro generatore 2

inizio giro generatore 3
inizio del giro
3-3
fine del giro
fine giro generatore 3

Fine della funzione di generazione
 */