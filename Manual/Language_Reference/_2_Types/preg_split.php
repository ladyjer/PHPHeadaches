<?php
$matches = preg_split('/(\s)/', '1 2 3 4 5 6 7 8', -1);//, PREG_SPLIT_DELIM_CAPTURE);
var_dump($matches);

$matches2 = explode(' ', '1 2 3 4 5 6 7 8');
var_dump($matches2);

if ($matches == $matches2) echo "sono uguali";

/*
array(8) {
  [0]=>
  string(1) "1"
  [1]=>
  string(1) "2"
  [2]=>
  string(1) "3"
  [3]=>
  string(1) "4"
  [4]=>
  string(1) "5"
  [5]=>
  string(1) "6"
  [6]=>
  string(1) "7"
  [7]=>
  string(1) "8"
}
array(8) {
  [0]=>
  string(1) "1"
  [1]=>
  string(1) "2"
  [2]=>
  string(1) "3"
  [3]=>
  string(1) "4"
  [4]=>
  string(1) "5"
  [5]=>
  string(1) "6"
  [6]=>
  string(1) "7"
  [7]=>
  string(1) "8"
}
sono uguali
*/
