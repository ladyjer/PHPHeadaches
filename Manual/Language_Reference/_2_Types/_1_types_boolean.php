<?php
 /*
  * FALSE IS
  * integer 0
  * float 0.0
  * "" and "0"
  * array()
  * null
  */

 if ("FALSE") echo "It's a non-empty string, so it's true!\n";

 if (0 == (bool)'all') echo "No print, it's false!\n";
 if (0 == 'all'); echo "it's true!\n";
 /*
  * Because where is an implicit cast to int and (int)'all' equals 0
  */

 /*
  It's a non-empty string, so it's true!
  it's true!
  */
