<?php
/********************************
 *                              *
 * Created by IntelliJ IDEA.    *
 * User: ladyj                  *
 * Date: 10/1/14                *
 * Time: 12:04 PM               *
 *                              *
 *                              *
 *                              *
 *******************************/
 $presto = new a(); //funziona lo stesso, anche se la classe
                    //è definita a valle. più o meno come le funzioni

 class A {
    public $x;

    function foo() {
          if (isset($this)) {
              echo "\$this esiste ed è istanza di " . get_class($this) . "!\n";
              //se non metto la / dice:
              //HP Catchable fatal error:  Object of class A could not be converted to string
          } else {
              echo "\$this NON esiste!\n";
          }
     }

     function unAltro() {
         return new self;
     }

     function unAltroPapa() {
         return new parent;
     }
 }

 class B {
     function bar() {
         A::foo();
     }
 }

 $a = new a(); //classi case insensitive
 $a->foo();//$this esiste ed è istanza di A!
 a::foo();//$this NON esiste!
 A::foo();//$this NON esiste!
 B::bar();//$this NON esiste!
 $b = new b();
 $b->bar();//$this esiste ed è istanza di B!

 $c = $a->unAltro();
 $a->x = 100;
 $c->x = 200;
 var_dump($a->x);//int(100)
 var_dump($c->x);//int(200)
 //var_dump($a->unAltroPapa()); //PHP Fatal error:  Cannot access parent:: when current class scope has no parent
