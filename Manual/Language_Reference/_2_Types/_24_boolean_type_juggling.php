 <?php
/*
 * To explicitly convert a value to boolean, use the (bool) or (boolean) casts. 
 * However, in most cases the cast is unnecessary, since a value will be automatically 
 * converted if an operator, function or control structure requires a boolean argument.
 */
 
$clud = 23;
$x = true;


echo $clud == true; // 1, vero
echo $clud == $x; // 1, vero

/*
 * Echoes:
 * 11
 */
