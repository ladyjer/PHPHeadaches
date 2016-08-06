<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/24/14
 * Time: 3:59 PM
 *
 * POST! Attenzione! NON GET
 * Funziona solo con i dai inviati con POST!
 */
 ini_set('always_populate_raw_post_data', 1);
?>
 <form method="POST">
      <input type="text" name="nome"/>
      <button type="submit" name="Ok" value="Ok">Ok</button>
 </form>
<?php
 echo "...". $HTTP_RAW_POST_DATA,"<br>";//bho non funziona, non popola la variabile
 echo file_get_contents("php://input");
 echo "<br>";
 echo $_POST['nome'];
 /*
nome=mariella%26ciao&Ok=Ok
mariella&ciao


 io ho scritto mariella&ciao fisicamente nel campo di testo
  */
?>



