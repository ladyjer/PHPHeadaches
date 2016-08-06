<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/14/14
 * Time: 6:49 PM
 */
 /*
  * i references sono dei sinomini, usati per accedere la stessa variabile con più nomi
  * non sono come i puntatori del C o di Java
  * non sono indirizzi di memoria
  * sono degli alias della tabella dei simboli di PHP
  * in PHP il nome e il valore  di una variabile sono differenti, e lo stesso contenuto
  * può avere più nomi.
  */

  /*
   * Se si assegna, passa come paramentro o restituisce una variabile indefinita by reference, viene creata
   * e le viene assegnato il valore di default.
   */
  $a =& $b;     //nessun notice, nessuna segnalazione
  var_dump($a);//NULL
  var_dump($b);//NULL
  //$a non punta a $b nè viceversa. sono identiche, entrambe puntano allo stesso posto

  /*
   * Dal PHP 5, new restituisce un reference automaticamente. Così usare =& new è deprecated
   * e restituisce un errore E_DEPRECATED o E_STRICT nelle ultime versioni.
   */
  $a =& new stdClass();//DEPRECATED
  /*
   * ATTENZIONE: AD ESSERE DEPRECATED E' =& NEW
   * se faccio $a = new x; $b =& $a va bene
   */

  /*
   * Dal PHP5, le variabili che puntano agli oggetti NON CONTENGONO PIU' l'oggetto in se,
   * ma un ID che permette alla variabile di trovare l'oggetto. quando un oggetto viene assegnato
   * passato o restituito by reference, le varia variabili non sono degli alias, contengono una copia
   * dell'ID che punta a quell'oggetto.
   */