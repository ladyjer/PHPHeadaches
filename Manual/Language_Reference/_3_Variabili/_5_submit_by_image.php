<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/16/14
 * Time: 10:33 PM
 */
 var_dump($_GET);

 /* restituisce le coordinate del punto in cui è avvenuto il click
  * array (size=2)
  'immagine_cliccata_x' => string '10' (length=2)
  'immagine_cliccata_y' => string '12' (length=2)

 http://localhost/PHPCert/Manuale/Variabili/submit_by_image.php?immagine_cliccata.x=53&immagine_cliccata.y=28
 Da notare che i . sono stati sostituiti dall'underscore
 Questo perchè il . non è uno dei caratteri che possono essere inseriti nel nome delle variabili
 (ricordi register_globals?)
  */

  //$cioa.pep = 10; //PHP Parse error:  syntax error, unexpected '='
?>
<form method="get">
    <input type="image" name="immagine_cliccata" src="invia.gif" value="Clicca">
</form>