<?php
 $data = 'data';
 echo (int) empty(trim($data)); //0 con php 5.5
 $vuoto = '';
 echo (int) empty(trim($vuoto)); //1 con php 5.5
 
 /*
  * Con PHP 5.4 o inferiore da
  *
  * <b>Fatal error</b>:  Can't use function return value in write context in <b>[...][...]</b> on line <b>3</b><br />
  */
