<?php
/**
 * Created by IntelliJ IDEA.
 * User: ColomboM
 * Date: 08/09/14
 * Time: 15.32
 *
 * in php le stringe sono sequenze di byte. ogni byte un carattere. php supporta
 * nativamente solo caratteri a 256 bit. non offre nativamente supporto per
 * UNICODE.
 * Ogni striga è grande al massimo due giga.
 *
 *
 * The string in PHP is implemented as an array of bytes and an integer indicating
 * the length of the buffer. It has no information about how those bytes translate
 * to characters, leaving that task to the programmer. There are no limitations on
 * the values the string can be composed of; in particular, bytes with value 0
 * (“NUL bytes”) are allowed anywhere in the string (however, a few functions,
 * said in this manual not to be “binary safe”, may hand off the strings to libraries that ignore data after a NUL byte.)
 *
 * This nature of the string type explains why there is no separate “byte”
 * type in PHP – strings take this role. Functions that return no textual data –
 * for instance, arbitrary data read from a network socket – will still return strings.
 *
 * Given that PHP does not dictate a specific encoding for strings, one
 * might wonder how string literals are encoded. For instance, is the
 * string "á" equivalent to "\xE1" (ISO-8859-1), "\xC3\xA1" (UTF-8, C form),
 * "\x61\xCC\x81" (UTF-8, D form) or any other possible representation?
 * The answer is that string will be encoded in whatever fashion it is encoded in the script file.
 * Thus, if the script is written in ISO-8859-1, the string will be encoded in ISO-8859-1 and so on.
 * However, this does not apply if Zend Multibyte is enabled; in that case, the script may
 * be written in an arbitrary encoding (which is explicity declared or is detected) and
 * then converted to a certain internal encoding, which is then the encoding that will
 * be used for the string literals. Note that there are some constraints on the encoding
 * of the script (or on the internal encoding, should Zend Multibyte be enabled) –
 * this almost always means that this encoding should be a compatible superset of
 * ASCII, such as UTF-8 or ISO-8859-1. Note, however, that state-dependent
 * encodings where the same byte values can be used in initial and non-initial shift states may be problematic.
 *
 * Of course, in order to be useful, functions that operate on
 * text may have to make some assumptions about how the string is encoded
 * 1.Some functions assume that the string is encoded in some (any) single-byte encoding,
 *  but they do not need to interpret those bytes as specific characters.
 *  This is case of, for instance, substr(), strpos(), strlen() or strcmp().
 *  Another way to think of these functions is that operate on memory buffers, i.e.,
 *  they work with bytes and byte offsets.
 * 2. Other functions are passed the encoding of the string,
 *  possibly they also assume a default if no such information is given. This is the case of htmlentities()
 * 3.Others use the current locale (see setlocale()), but operate byte-by-byte.
 *  This means they can be used only with single-byte encodings, as long as the encoding
 *  is matched by the locale. For instance strtoupper("á") may return "Á" if the locale is
 *  correctly set and á is encoded with a single byte.
 *  If it is encoded in UTF-8, the correct result will not be returned and the resulting string
 *  may or may not be returned corrupted, depending on the current locale.
 *  Finally, they may just assume the string is using a specific encoding, usually UTF-8.
 *  This is the case of most functions in the intl extension and in the PCRE
 *  extension (in the last case, only when the u modifier is used).
 *  Although this is due to their special purpose, the function utf8_decode()
 *  assumes a UTF-8 encoding and the function utf8_encode() assumes an ISO-8859-1 encoding.
 */
 $a = 'va\' via';
 var_dump($a);   //string(7) "va' via"
 $a = 'ci deviamo a \\ root'; //string(19) "ci deviamo a \ root"
 var_dump($a);
 //tutti gli altri backslash verranno scritti e non reinterpretati
 $a = 'ciao a capo\n';
 var_dump($a);       //string(13) "ciao a capo\n"
 $a = 'ciao
 vado a
 capo';
 var_dump($a);       //string(20) "ciao
//vado a
//capo"
 //da tabella dei caratteri ascii estesa, il trademark è il codice decimale 153
 $a = "questo è il trademark in ottale : \231"; //... 231 in ottale ....
 var_dump($a);
 $a = "questo è il trademark in esadecimale: \x99"; //... 231 in esadecimale ....
 var_dump($a);
 //se uso gli apici singoli i caratteri sopra non vengono re-interpretati
 $a = 100;
 echo "Io voglio proprio scrivere \{$a} non voglio il suo contenuto!\n";//Io voglio proprio scrivere \{100} non voglio il suo contenuto!
 echo "Io voglio proprio scrivere {\$a} non voglio il suo contenuto!\n";//Io voglio proprio scrivere {$a} non voglio il suo contenuto!
 //è la coppia {$ vicina che fa scattare l'interpolazione
$heredoc = <<< E_COSI
Devo andare a capo dopo l'identificatore di apertura
e quello di chiusura per essere valido
deve essere la prima cosa scritta sulla riga seguito dal ; senza spazi
se prima del ; metto uno spazio da errore il parser.
Può però esserci uno spazio tra <<< e l'identificato di apertura
come in questo caso.
E_COSI;
 var_dump($heredoc);
//NEWDOC
$x = <<<'NEWDOC'
i newdoc sono come gli heredoc ma in versione single quote
il testo contenuto non viene passato dal parser e preso coì com'è
\n {$a} \231
NEWDOC;
var_dump($x);
/*
 * string(141) "i newdoc sono come gli heredoc ma in versione single quote
il testo contenuto non viene passato dal parser e preso coì com'è
\n {$a} \231"
 */
$succhi = array('mele', 'pere', 'mamma' => 'banane');

/*
 * Il segreto per la notazione complessa con {} è di scrivere
 * il valore come lo si otterrebbe fuori da una stringa (deve però iniziare con $), e poi contornarlo con
 * {}. funziona anche inserendo chiamate a funzioni
 */

echo "viva le $succhi[mamma]".PHP_EOL; //viva le banane (da notare che non ci sono gli apici a mamma)
//echo "viva le $succhi['mamma']".PHP_EOL; //QUESTO da errore di sintassi. se voglio urare gli apici
                                           //devo usare {}
echo "viva le {$succhi['mamma']}".PHP_EOL;//funziona
echo "viva le {$succhi[mamma]}".PHP_EOL;//funziona, stampa banane, ma da un notice
                                        // perchè cerca la costante mamma : Notice: Use of undefined constant mamma - assumed 'mamma'
$r = 'mamma';
echo "viva le {$succhi[$r]}".PHP_EOL;//funziona, stampa banane
echo "viva le $succhi[0]".PHP_EOL;     //viva le mele
$zero = 0;
echo ">>>>viva le $succhi[$zero]".PHP_EOL;//viva le mele, funziona
echo ">>>>viva le $succhi[$zeroo]".PHP_EOL;//Notice: Undefined variable: zeroo (stampa solo "viva le")

$x = '100';
echo "la carica dei ${x} e uno\n";//funziona, stampa "la carica dei 100 e uno"

function getX() {
    return 0;
}
echo "mi piacciono le {getX()}\n";//non funziona, non si attiva perchè non trova {$..., stampa mi piacciono le {getX()}
echo "mi piacciono le {$succhi[getX()]} \n";//mi piacciono le mele

$r = 0;
echo "mi piacciono le {$succhi[$r]} \n";//mi piacciono le mele
//se construendo la scritta metterei due $$ vicini, il secondo lo includo in un altra coppia di {}
$a = 'cagnolone';
$r = 'a';
echo "Paco è un gran {${$r}}"; //Paco è un gran cagnolone



