<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/12/14
 * Time: 10:23 PM
 *
 * Quindi l'implementazione  yo-yo per le funzioni NON-statiche funziona
 *
 */

 class a {
     function test() {
         echo $this->go();
     }

     function go()
     {
         return __METHOD__;
     }
 }

 class b extends a {

     function go()
     {
         return "ciao ".__METHOD__;
     }
 }

 $b = new b();
 $b->test();//ciao b::go