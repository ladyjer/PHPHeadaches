<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 22/02/15
 * Time: 17.40
 */
 $x = 4.0 / 2;
 var_dump(gettype($x)); //double
 var_dump($x); //double(2) - da notare che non scrive double(2.0)
 var_dump(gettype(round(2.6))); //double
 var_dump(round(2.6)); //double(3)
 var_dump(floor(2.6)); //double(3)

 $x = 5.6;
 echo gettype($x),"\n"; //double
 echo var_dump($x),"\n";//double(5.6)
/*
double round ( double $val [, int $precisione ] )
float floor ( float $numero )

Floating point numbers (also known as "floats", "doubles", or "real numbers")
can be specified using any of the following syntaxes:
Sembrano essere semplicemente sinonimi. Da stack overflow:

There is no difference in PHP. float, double or real are the same datatype.
At the C level, everything is stored as a double.
The real size is still platform-dependent.
 */
 echo PHP_VERSION, "\n";//5.5.9-lubuntu4.6
 echo PHP_VERSION_ID, "\n";//50509

 echo var_dump((float) NAN); //double(NAN)
 echo var_dump((int) NAN); //int(-9223372036854775808) - che corrisponde a PHP_INT_MAX+1
/*
 * 3.Others use the current locale (see setlocale()), but operate byte-by-byte.
 *  This means they can be used only with single-byte encodings, as long as the encoding
 *  is matched by the locale. For instance strtoupper("á") may return "Á" if the locale is
 *  correctly set and á is encoded with a single byte.
 *  If it is encoded in UTF-8, the correct result will not be returned and the resulting string
 *  may or may not be returned corrupted, depending on the current locale.
 *
 */
 var_dump(mb_internal_encoding());//string(10) "ISO-8859-1"
 $s = "ç";
 echo strtoupper($s), "\n";//ç resta minuscolo
 echo mb_strtoupper($s, 'UTF-8'), "\n";//Ç
 $s = "à";
 echo strtoupper($s), "\n";//à resta minuscolo
 echo mb_strtoupper($s,'UTF-8'), "\n";//À
 $s = "l";
 echo strtoupper($s), "\n";//L maiuscola
 echo mb_strtoupper($s), "\n";//L maiuscola



