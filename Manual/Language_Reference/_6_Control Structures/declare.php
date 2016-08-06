<?php
/**
 * Created by IntelliJ IDEA.
 * User: ColomboM
 * Date: 23/09/14
 * Time: 15.36
 *
 *
 * Il codice all'interno della declare viene eseguiti normalemente
 * ed influenzato dalla declare stessa.
 * se usato nel formato ;, senza {}, la validità è da lì in poi.
 * se il php viene incluso in un file, non influenza il genitore.
 */

 declare(ticks=1);

 function ciao(&$x, $y = false) {
     $x++;
     echo "Ciao $x" . ($y?" chiamata diretta":" chiamata indiretta") . "\n";
 }

 $a = 10;
 register_tick_function('ciao', $a);//bool(true)
 xdebug_debug_zval('a');
 ciao($a, true);
 echo "---$a---\n";  //---11---
 xdebug_debug_zval('a');
/*** NON RIESCO A CAPIRE. Le chiamate da tick sembrano ignorare il passaggio
 *   del parametro come riferimento. va avanti come se i parametri fossero
 *   implicitamente static all'itnerno della funzione quando viene chiamata
 *   by tick
Ciao 11 chiamata indiretta
a: (refcount=1, is_ref=0)=10
Ciao 12 chiamata indiretta
Ciao 13 chiamata indiretta
Ciao 11 chiamata diretta
Ciao 14 chiamata indiretta
Ciao 15 chiamata indiretta
---11---
Ciao 16 chiamata indiretta
a: (refcount=1, is_ref=0)=11
Ciao 17 chiamata indiretta
 */
