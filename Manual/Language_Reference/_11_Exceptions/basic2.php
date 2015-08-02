<?php
/**
 * Created by IntelliJ IDEA.
 * User: ColomboM
 * Date: 21/10/14
 * Time: 14:27
 *
 */

 try {
     try {
        throw new Exception("Mio");
     } catch (Exception $e) {
        throw new Exception($e->getMessage() . " di più");
     }
 } catch (Exception $e) {
     echo $e->getMessage(); //Mio di più
 }