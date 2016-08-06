<?php
/**
 * Created by IntelliJ IDEA.
 * User: ColomboM
 * Date: 23/09/14
 * Time: 12.29
 *
 * Per gli obiettivi di continue, lo switch è considerato
 * una struttura a loop
 */

 $i = 10;

 switch ($i) {
     case 1 : echo 'Mai';
     case 10: echo 'Cambio idea';
              continue;
              echo 'Cambio idea ....';
     case  9; echo 'Sono il 9';          //si possono usare anche i ; invece dei :
     default; echo 'Sono il default';
 }

 /*
Cambio idea
  */

 /*
  * continue and break are the same in PHP when using switch statements.
  * Se ho uno switch dentro un while e voglio passare all'iterazione successiva
  * devo fare continue 2; non 1.
  */