<?php
$x=TRUE;
$y=FALSE;

echo var_dump($z=$y OR $x); //bool(true)
echo var_dump($z);//bool(false)
