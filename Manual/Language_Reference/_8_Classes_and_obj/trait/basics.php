<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/10/14
 * Time: 3:30 PM
 *
 * A Trait is similar to a class, but only
 * intended to group functionality in a fine-grained and consistent way.
 * It is not possible to instantiate a Trait on its own.
 */

 trait umano {
     public $c = 100; //possono avere proprietà

     public function parla() {
         echo __METHOD__,PHP_EOL;
     }

     public function urla() {
         echo __METHOD__,PHP_EOL;
     }

     public function ascolta() {
         parent::ascolta();
         echo __METHOD__,PHP_EOL;
     }
 }

 class Fumagalli {
     public function urla() {
         echo __METHOD__,PHP_EOL;
     }
 }

 class Giulia extends Fumagalli {
     use umano;
     /*
      * An inherited member from a base class is overridden by a member inserted by a Trait.
      * The precedence order is that members from the current
      * class override Trait methods, which in turn override inherited methods.
      */
     public function urla() {
         echo parent::urla();
         echo __METHOD__,"\n";
     }
 }

 $g = new Giulia();
 $g->parla();//umano::parla

 $g->urla();
 //Fumagalli::urla
 //Giulia::urla

 //$g->ascolta();//PHP Fatal error:  Call to undefined method Fumagalli::ascolta()

 echo $g->c;


