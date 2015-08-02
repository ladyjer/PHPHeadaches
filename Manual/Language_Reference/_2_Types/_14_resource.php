<?php
/**
 * Created by IntelliJ IDEA.
 * User: ColomboM
 * Date: 11/09/14
 * Time: 15.17
 *
 *
 * Sono variabili speciali che contengono un riferimento ad una risorsa esterna
 *
 * Sono connessioni a db, immagini, file
 * Thanks to the reference-counting system introduced with PHP 4's Zend Engine,
 * a resource with no more references to it is detected automatically,
 * and it is freed by the garbage collector.
 * For this reason, it is rarely necessary to free the memory manually.
 * Persistent database links are an exception to this rule.
 * They are not destroyed by the garbage collector.
 * See the persistent connections section for more information.
 *
 * Non ha senso fare delle conversioni da e a resource
 */
