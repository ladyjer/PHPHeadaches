<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 23/09/15
 * Time: 23.29
 */
?>
<!-- commentone
<?php echo "HTML commentato"; ?>
-->
<?php
/*produce un HTML del genere
<!-- commentone
HTML commentato-->
*/
?>

<p><?php echo "ciao"; //echo "bau";?></p> <!-- this </p> isn't commented out -->
<?php
 /*
  *
  * <p>ciao</p> <!-- this </p> isn't commented out -->
  */
?>

<p><?php echo "uno";?></p>
<p><?php /*echo "due";?></p><h2>won't see me</h2> <!-- this </p> is a comment (and this comment is commented too!)-->
<p><?php echo "tre";*/?></p> <!-- this <p> is a comment -->
<p><?php echo "quattro";?></p>

<?php
 /*
  * Produce
  <p>uno</p>
  <p></p> <!-- this <p> is a comment -->
  <p>quattro</p>
  */
?>
