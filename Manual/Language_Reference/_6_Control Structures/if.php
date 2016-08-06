<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/21/14
 * Time: 4:31 PM
 */

 if (true) :
     var_dump('Ver'); //string(3) "Ver"
 else:
     var_dump('cio');
 endif;

 if (false) :
    var_dump('Ver'); //string(3) "Ver"
 //else if (true)://PHP Parse error:  syntax error, unexpected 'if' LA NOTAZIONE CON : VUOLE PER FORZA
                  //elseif tutto attaccato altrimenti il perser fa confusione e non riesce a capire dove si trova.
 elseif (true):
 //elsif (true): ///----NOOOO, le e ci vuole
    var_dump('cio');
 endif;

 /*
  * Mizare { e sistema a : nello stesso blocco non è supportato
  */

 /*
 if (true) { ?>
    CIAO   -----NON VIENE STAMPATO A VIDEO
 <?php }*/
?>
