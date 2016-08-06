<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/21/14
 * Time: 4:40 PM
 */

 $a = 10;
 switch ($a): ?>
    <?php case 1: echo 'ciao'; ?>  <!--QUESTO NON VA BENE! gli spazi mandano in casino il parser. lo stesso vale se si
                                       usano le {}
                                       PHP Parse error:  syntax error, unexpected '    ', expecting endswitch->
<?php case 1: echo 'ciao'; ?>  <!--cosiì invece va bene
<?php endswitch ?>