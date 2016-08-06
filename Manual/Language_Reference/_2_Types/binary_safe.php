/*All strings in PHP have a length associated, which are the number of bytes that compose it. 
When a function manipulates a string, it can either:

Rely on that length meta-data.
Rely on the string being null-terminated, i.e., that after the data that is actually part of the string, 
a byte with value 0 will appear.
It's also true that all string PHP variables manipulated by the engine are also null-terminated. 
The problem with functions that rely on 2., is that, if the string itself contains a byte with value 0, 
the function that's manipulating it will think the string has ended at that point and will ignore everything after that.

For instance, if PHP's strlen function worked like C standard library strlen, the result here would be wrong:
*/
$str = "abc\x00abc";
echo strlen($str); //gives 7, not 3!

$a = "as\x00ciao";
echo $a;//as�ciao, '\';
echo strlen($a);// 7 - binary safe
echo mb_strlen($a);// 7

/*
da wikipedia:
A binary-safe function is essentially one that treats its input as 
a raw stream of bytes and ignores every textual aspect it may have. 
It would therefore be more correct to characterize a 'binary-safe' 
text-function as one which incidentally works on text, 
but whose primary mode of operation is on raw binary data.
*/
