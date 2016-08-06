<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/12/14
 * Time: 10:23 PM
 */

 abstract class a {
     function test() {
         echo $this->go();
     }

     abstract function go();
 }

 class b extends a {

     function go()
     {
         return __METHOD__;
     }
 }

 $b = new b();
 $b->test();//b::go
