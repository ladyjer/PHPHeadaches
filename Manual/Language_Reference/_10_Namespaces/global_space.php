<?php
/**
 * Created by IntelliJ IDEA.
 * User: ColomboM
 * Date: 15/10/14
 * Time: 15:47
 */
 namespace {
     function ciao() {
         echo __FUNCTION__,PHP_EOL;
     }
 }

 namespace saluti {
     function ciao() {
         echo __FUNCTION__,PHP_EOL;
     }
     ciao();
     \ciao();
 /*
saluti\ciao
ciao
  */
 }