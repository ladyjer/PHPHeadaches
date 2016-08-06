<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 01/11/14
 * Time: 17.00
 * PHP provides a number of miscellaneous I/O streams that allow access to PHP's
 * own input and output streams, the standard input, output and error file descriptors, in-memory and disk-backed
 * temporary file streams, and filters that can manipulate other file
 * resources as they are read from and written to.
 */

/*php://input
 php://input is a read-only stream that allows you to read raw data from the request body. In the case of POST requests
 php://input is not available with enctype="multipart/form-data".

 php://output
 php://output is a write-only stream that allows you to write to the output buffer mechanism in the same way as print and echo.

 glob:// — Find pathnames matching pattern
 */
 // Loop over all *.php files in ext/spl/examples/ directory
 // and print the filename and its size
 $it = new DirectoryIterator("glob://".__DIR__."/*.php");
 foreach($it as $f) {
    printf("%s: %.1FK\n", $f->getFilename(), $f->getSize()/1024);
 }
 /*
_2_basics.php: 1.5K
php.php: 1.0K
  */