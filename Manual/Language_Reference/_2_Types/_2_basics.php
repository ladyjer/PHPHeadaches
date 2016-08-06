<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/4/14
 * Time: 1:41 PM
 */

 /*
  * Se il file contiene solo codice PHP è consigliabile non chiudere con ?>
  */
?>
<h1>Ciao</h1>
<?php echo 'cippa';//l'acapo dopo \?\> non verrà riportato nel html?>
luna
<br>
<?php
 /*
 ?>
 <h1>QUESTO NON VIENE STAMPATO</h1>
 <?php
 */
?>
 <h1>QUESTO VIENE STAMPATO</h1>
<?= "E' sempre disponibile. non c'è bisogno di attivare nessun paramentro di init, questo dal php 5.4"?>

<!-- HTML DI OUTPUT
<h1>Ciao</h1>
cippaluna
<br>
<h1>QUESTO VIENE STAMPATO</h1>
E' sempre disponibile. non c'è bisogno di attivare nessun paramentro di init, questo dal php 5.4
-->