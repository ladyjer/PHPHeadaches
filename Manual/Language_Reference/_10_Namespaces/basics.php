<?php
/**
 * Created by IntelliJ IDEA.
 * User: ColomboM
 * Date: 14/10/14
 * Time: 15:27
 *
 * Namespace names PHP and php,
 * and compound names starting with t
 * hese names (like PHP\Classes) are
 * reserved for internal language use
 * and should not be used in the userspace code.
 *
 * gli unici oggetti influenzati dai namespaces sono
 * classi, traits, interfacce, funzioni e costanti
 *
 * la dichiarazione deve essere in cima, con l'unica eccezione
 * nelle declare per stabilire la codifica dello script. prima non
 * può esserci nemmeno del codice non php (come un <html> FATAL ERROR).
 * Possono esserci
 * prima dei commenti
 */
 namespace fumagalli;
 //lo stesso namespace può essere presente anche in file diversi
 namespace fumagalli\giulia;
 //tuttavia se devo definire + namespaces nell stesso file è meglio usare
 //la sequente notazìione con le {}

 //PHP Fatal error:  Cannot mix bracketed namespace declarations
 //with unbracketed namespace declarations
 /*namespace fumagalli\lucia {

 }*/