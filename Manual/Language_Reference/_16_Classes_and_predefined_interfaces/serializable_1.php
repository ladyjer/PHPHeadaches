<?php
/**
 * Created by IntelliJ IDEA.
 * User: ColomboM
 * Date: 28/10/14
 * Time: 16:42
 */
 require_once('serializable_obj.php');
 session_start();

 /*
  * se faccio session_destroy devo poi richiamare session_start per ripartire
  * con session_unset invece no, svuoto semplicemente in un colpo solo la $_SESSION
  */

 session_unset();
 $o = new Obj();
 $_SESSION['o'] = $o;
 echo session_id();
?>
<html>
<head><title>CIAO</title></head>
<body>
<a href="serializable_2.php" name="va">OK!</a>
</body>
</html>
<?php
  /*
   * Obj::unserialize OK! Obj::serialize
   *
   */
  /*
   * ATTENZIONE! Se tolgo 'implements Serializable' dalla classe Obj ottengo:
   *
   * Obj::__wakeup OK! Obj::__sleep
   */
?>