<?php
/**
 * Created by IntelliJ IDEA.
 * User: ColomboM
 * Date: 21/10/14
 * Time: 14:22
 */
 function brutta() {
     throw new Exception('Bruttaaaa');
 }

 try {
     brutta();
 } catch (Exception $e) {
     echo $e->getMessage(),PHP_EOL;//Bruttaaaa
 }

 brutta(); //Fatal error: Uncaught exception 'Exception' with message 'Bruttaaaa'
