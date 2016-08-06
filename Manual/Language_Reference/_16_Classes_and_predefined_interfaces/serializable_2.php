<?php
/**
 * Created by IntelliJ IDEA.
 * User: ColomboM
 * Date: 28/10/14
 * Time: 16:44
 */
require_once('serializable_obj.php');
session_start();
var_dump($_SESSION);
/*
Obj::unserialize

array (size=1)
  'o' =>
    object(Obj)[1]
      private 'a' => int '10'

Obj::serialize
*/

/*
 * ATTENZIONE! Se tolgo 'implements Serializable' dalla classe Obj ottengo:
 *
Obj::__wakeup

array (size=1)
  'o' =>
    object(Obj)[1]
      private 'a' => int 10

Obj::__sleep

 */
?>

