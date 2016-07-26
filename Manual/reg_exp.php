<?php

$exp = "/.*\*123\b/";

echo preg_match($exp, "*******123"), "\n";
echo preg_match($exp, "*******_123"), "\n";
echo preg_match($exp, "*******1234"), "\n";
echo preg_match($exp, "_*1234"), "\n";
echo preg_match($exp, "_*123"), "\n";

/*
1
0
0
0
1
*/
