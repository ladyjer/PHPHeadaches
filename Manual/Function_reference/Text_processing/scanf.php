$a = <<<CIAO
maio bau ciao
simba simbad ciudad
CIAO;

list($a, $b, $c, $d) = sscanf($a, "%s\t%s\t%s\n");

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);

/*
<br />
<b>Notice</b>:  Undefined offset: 3 in <b>[...][...]</b> on line <b>8</b><br />
string(4) "maio"
string(3) "bau"
string(4) "ciao"
NULL
*/
