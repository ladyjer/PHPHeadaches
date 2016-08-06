<?php
    $a = 1.234;
    $b = 1.2e3;
    $c = 7E-10;

    /*
     *Floating point numbers have limited precision. Although it depends on the system,
     * PHP typically uses the IEEE 754 double precision format, which will give a maximum relative
     * error due to rounding in the order of 1.11e-16. Non elementary arithmetic operations may give
     * larger errors, and, of course, error propagation must be considered when several operations are compounded.
     * Additionally, rational numbers that are exactly representable as floating point numbers
     * in base 10, like 0.1 or 0.7, do not have an exact representation as floating
     * point numbers in base 2, which is used internally, no matter the size of the mantissa.
     * Hence, they cannot be converted into their internal binary counterparts without a small loss of precision.
     * This can lead to confusing results: for example, floor((0.1+0.7)*10) will usually return 7 instead
     * of the expected 8, since the internal representation will be something like 7.9999999999999991118....
     * So never trust floating number results to the last digit, and do not compare floating point numbers directly for equality.
     */
     $a = (float) new stdClass();  //Notice: Object of class stdClass could not be converted to double
     var_dump($a);//double(1)
     echo $a, "...."; //1....

     if (0.8 == (0.1 + 0.7)) { //false!
         echo "NOOOO it's false";
     }

     if (0.8 == bcadd(0.1, 0.7, 1)) { //true
        echo "NOW It's true!";
     }

     /*
      * Some numeric operations can result in a value represented by the constant NAN.
      * This result represents an undefined or unrepresentable value in floating-point calculations
      */

     if (NAN == NAN) {
         echo "no, it's false. No print";
     }

     if (is_nan(NAN)) {
        echo "Ok it's true";
     }