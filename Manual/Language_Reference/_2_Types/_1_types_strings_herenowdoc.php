<?php
$x = 'Giulia';
$heredoc = <<<fine
ciao
$x
come va
fine;

$another_heredoc = <<<"fine"
ciao
$x
come va
fine;

$nowdoc = <<<'fine'
ciao
$x
come va
fine;

echo $heredoc, "\n", $another_heredoc, "\n", $nowdoc;

/*
ciao
Giulia
come va
ciao
Giulia
come va
ciao
$x
come va
 */