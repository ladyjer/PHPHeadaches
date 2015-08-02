<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/3/14
 * Time: 2:48 PM
 */

 namespace famiglia {

     class papa {
        function saluta() {
            echo self::class;
            //echo papa::class;  ... uguale a sopra
        }
     }

     $p = new papa();
     $p->saluta();//famiglia\papa
 }