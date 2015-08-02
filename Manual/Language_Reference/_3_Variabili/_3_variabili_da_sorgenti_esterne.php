<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/16/14
 * Time: 10:17 PM
 */
 setcookie("Mine[ciao]", 1000);
 setcookie("Mine[bao]",  2000);

 var_dump($_COOKIE);//se lo lancio da comando ovvimanente l'array è vuoto array(0){}
/*
 * empty al primo giro
 * al secondo :
 * array (size=1)
  'Mine' =>
    array (size=2)
      'ciao' => string '1000' (length=4)
      'bao' => string '2000' (length=4)
  i cookie nel browser sono due, ma i $_COOKIES vengon raggruppati
 */

 var_dump($_GET);

 /* Al primo lancio $_GET è vuota
 array (size=0)
  empty
  *
  *http://localhost/PHPCert/Manuale/Variabili/variabili_da_sorgenti_esterne.php?
  * eta.minima=38&
  * persona[nome]=mariella&
  * persona[cognome]=colombo&
  * persona[sopra.nome]=tri&
  * colori[]=blue&
  * colori[]=green&ok1=Ok
  *
array (size=4)
  'eta_minima' => string '38' (length=2)   <<<<<<nota l'_. Nell'url c'è il . la sosrtituzione avviene con . e spazzi nel nome
  'persona' =>
    array (size=3)
      'nome' => string 'mariella' (length=8)
      'cognome' => string 'colombo' (length=7)
      'sopra.nome' => string 'tri' (length=3)       <<<nota che qui non è successa alcuna sostituzione del .
  'colori' =>
    array (size=2)
      0 => string 'blue' (length=4)
      1 => string 'green' (length=5)
  'ok1' => string 'Ok' (length=2)
  */
?>
<html>
<body>
 <form method="get">
     <input name="eta.minima" type="text">
     <input name="persona[nome]" type="text">
     <input name="persona[cognome]" type="text">
     <input name="persona[sopra.nome]" type="text">
     <select name="colori[]" multiple>
         <option name="blu.c" value="blue">Blu</option>
         <option name="green.c" value="green">Verde</option>
         <option name="red.c" value="red">Rosso</option>
     </select>
     <input type="submit" name="ok1" value="Ok">
     <input type="submit" name="ok2" value="Oki">
 </form>
</body>
</html>