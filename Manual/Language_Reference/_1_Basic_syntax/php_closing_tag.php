<?php include "php_closing_tag_2bincluded.php" ?>CIAO
<?php /*produce CiaoCIAO, l'assenza di ?> comporta lo strip di tutti i new line e gli spazi
        CiaoCIAO*/
?>
<?php include "php_closing_tag_2bincluded_2.php" ?>CIAO
<?php /* Va a capo, ma nel file incluso ci sono due a capo. uno dopo ?> e un altro ulteriore. senza il secondo non va a capo
       * When the PHP interpreter hits the ?> closing tags,
       * it simply starts outputting whatever it finds (except for an immediately following newline
        Ciao
        CIAO*/
?>
....
<?php echo "0"; ?>
....
....
<?php echo "0"; ?>....
....<?php echo "0"; ?>....
<?php
/*
....
0....
....
0....
....0....
  */
