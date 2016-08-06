<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/21/14
 * Time: 11:49 PM
 */
 function &rovescia() {
     $x = 3;
     while ($x > 0) {
         yield $x;
     }
 }

 foreach (rovescia() as &$r) {
     echo $r--,PHP_EOL;
 }
/*
3
2
1
 */

/*
 This flexibility does come at a cost, however: generators are forward-only iterators,
 and cannot be rewound once iteration has started. This also means that
 the same generator can't be iterated over multiple times:
 the generator will need to either be rebuilt by calling the generator
 function again, or cloned via the clone keyword.
 */
