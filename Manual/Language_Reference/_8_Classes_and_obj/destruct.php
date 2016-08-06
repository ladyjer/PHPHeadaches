<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/3/14
 * Time: 4:43 PM
 *
 * funzionano come i costruttori. se il padre ce l'ha e il figlio
 * non, viene chiamato quello del padre.
 * vengono chiamati anche se si usa exit. se si chiama exit in un distruttore,
 * il resto dei distruttori non viene chiamato.
 * all'epoca dei distruttori gli header sono già stati inviati e lanciare un
 * eccezione significa generare un fatal error.
 */

 class A {
    function __destruct() {
       echo "Distrutta\n";
    }
 }

 $a = new a;

 //distrutta.