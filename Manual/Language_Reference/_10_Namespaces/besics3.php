<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/14/14
 * Time: 9:09 PM
 *
 * To combine global non-namespaced code with namespaced code,
 * only bracketed syntax is supported.
 * Global code should be encased in a namespace statement with no namespace name as in:
 *
 */
 namespace fumagalli {
     function ciao() {
         echo 'Ciao';
     }
 }

 //function bau() {  //PHP Fatal error:  No code may exist outside of namespace {}

 //}

 namespace {
     function bau() {

     }
 }