<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/21/14
 * Time: 5:17 PM
 */

 for ($i = 0; var_dump('ciao'), $i < 3; $i++) {

 }
/*
string(4) "ciao"
string(4) "ciao"
string(4) "ciao"
string(4) "ciao"

 * 4 volte perchè l'ultima, quando $i < 3 è vera, la var dump viene eseguita!
 * se l'epressione centrale è composta da + istruzioni, è dall'ultima che viene preso
 * il true/false per decidere se continuare o no.
 */