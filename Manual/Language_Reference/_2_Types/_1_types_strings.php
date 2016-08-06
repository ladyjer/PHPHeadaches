<?php
  /*
   * A string is series of characters, where a character is the same as a byte.
   * This means that PHP only supports a 256-character set, and hence does not offer native Unicode support.
   * Note: string can be as large as up to 2GB
   */
  echo "\123\123", "\n";//SS
  echo "\1233", "\n";   //S3
  echo "\x44", "\n";    //D
  echo "\x444", "\n";   //D4
  echo "\u123", "\n";   //the sequence of characters matching the regular expression is a Unicode codepoint,
                        //which will be output to the string as that codepoint's UTF-8
                        //representation (added in PHP 7.0.0)
  $x = 0;

  class Pippo {
      //HEREDOC
     public $var1 = <<<parole
i can use
even
"
//i commenti non funzionano
/* tutto ciò finirà nella stringa */
\123
\x44
\u123
without problems
parole;
  }

  /*
   * Si può usare gli heredoc anche per inizializzare le proprietà degli oggetti,
   * ma non possono usare le variabili!
   */
  $v = new Pippo();
  echo $v->var1;
/*
i can use
even
"
//i commenti non funzionano
/* tutto ciò finirà nella stringa
S
D
\u123
without problems
 */