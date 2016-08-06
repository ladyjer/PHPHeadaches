<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 9/14/14
 * Time: 7:25 PM
 */

 $ref = 0;
 $row =& $ref;

 foreach (array(1,2,3) as $row) {
     null;
 }

 var_dump($ref); //int(3)

 /*
  * Nel momento in cui associo con =& due variabili, diventato uguali e paritetiche
  */