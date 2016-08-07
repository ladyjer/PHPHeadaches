<?php

  //$a = new A();//Autoload echos A
  $a = new a();//Autoload echos a

  function __autoload($c){
      echo $c;
  }

