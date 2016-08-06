<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/21/14
 * Time: 2:55 PM
 *
 *
 * restituisce true anche se si richiede un parent della clase instanziata
 * il not si fa così:
 * !($a instanceof Class)
 *
 * A dx può essere anche una variabile stringa o un oggetto (dice true se sono instanza della stessa
 * classe). NON SI PUO' USARE DIRETTAMENTE UNA STRINGA
 *
 * SI PUO' USARE PER LE INTERFACCE
 */
 $b = new stdClass();
 $a = 'MiaClasse1111';
 var_dump($b instanceof $a);//bool(false)
 var_dump($b instanceof MiaClasse1111);//bool(false)
 //var_dump($b instanceof 'MiaClasse');//PHP Parse error:  syntax error, unexpected ''MiaClasse''
 //var_dump(FALSE instanceof $a);//PHP Fatal error:  instanceof expects an object instance, constant given