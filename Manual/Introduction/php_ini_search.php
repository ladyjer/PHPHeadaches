<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 13/09/15
 * Time: 18.12


 * php.ini is searched for in these locations (in order):
 * SAPI module specific location (PHPIniDir directive in Apache 2, -c command line option in CGI and CLI, php_ini parameter in NSAPI, PHP_INI_PATH environment variable in THTTPD)
 * The PHPRC environment variable. Before PHP 5.2.0, this was checked after the registry key mentioned below.
 * As of PHP 5.2.0, the location of the php.ini file can be set for different versions of PHP. The following registry keys are examined in order: [HKEY_LOCAL_MACHINE\SOFTWARE\PHP\x.y.z], [HKEY_LOCAL_MACHINE\SOFTWARE\PHP\x.y] and [HKEY_LOCAL_MACHINE\SOFTWARE\PHP\x], where x, y and z mean the PHP major, minor and release versions. If there is a value for IniFilePath in any of these keys, the first one found will be used as the location of the php.ini (Windows only).
 * [HKEY_LOCAL_MACHINE\SOFTWARE\PHP], value of IniFilePath (Windows only).
 * Current working directory (except CLI).
 * The web server's directory (for SAPI modules), or directory of PHP (otherwise in Windows).
 * Windows directory (C:\windows or C:\winnt) (for Windows), or --with-config-file-path compile time option (<-- MY CASE).
 */

 echo php_sapi_name();
 //cli as php command line script
 //apache2handler as PHP server-side scripting in apache

 /*
  * /etc/apache2/mods-available
  * php5.conf
  *     <FilesMatch ".+\.ph(p[345]?|t|tml)$">
  *         SetHandler application/x-httpd-php
  *     </FilesMatch>
  *     <FilesMatch ".+\.phps$">
  *         SetHandler application/x-httpd-php-source
  *         # Deny access to raw php sources by default
  *         # To re-enable it's recommended to enable access to the files
  *         # only in specific virtual host or directory
  *         Order Deny,Allow
  *         Deny from all
  *     </FilesMatch>
  *     # Deny access to files without filename (e.g. '.php')
  *     <FilesMatch "^\.ph(p[345]?|t|tml|ps)$">
  *         Order Deny,Allow
  *         Deny from all
  *     </FilesMatch>
  *
  *
  *
  * /etc/apache2/mods-available
  * php5.load
  * LoadModule php5_module /usr/lib/apache2/modules/libphp5.so
  */

  /*
   * Il posizionamento del file php.ini in /ect/php5/apache è stato definito dalla
   * compile time option --with-config-file-path:
   *
   * php-config --configure-options :
   * --prefix=/usr --with-apxs2=/usr/bin/apxs2
   * --with-config-file-path=/etc/php5/apache2
   * --with-config-file-scan-dir=/etc/php5/apache2/conf.d (che contiene)
   *
   * lrwxrwxrwx 1 root root 29 ott 31  2014 20-json.ini -> ../../mods-available/json.ini
   * lrwxrwxrwx 1 root root 28 ott 31  2014 10-pdo.ini -> ../../mods-available/pdo.ini
   * lrwxrwxrwx 1 root root 32 ott 31  2014 05-opcache.ini -> ../../mods-available/opcache.ini
   * lrwxrwxrwx 1 root root 33 ott 31  2014 20-readline.ini -> ../../mods-available/readline.ini
   * lrwxrwxrwx 1 root root 30 nov 10  2014 20-mysql.ini -> ../../mods-available/mysql.ini
   * lrwxrwxrwx 1 root root 31 nov 10  2014 20-mysqli.ini -> ../../mods-available/mysqli.ini
   * lrwxrwxrwx 1 root root 34 nov 10  2014 20-pdo_mysql.ini -> ../../mods-available/pdo_mysql.ini
   * lrwxrwxrwx 1 root root 27 nov 12  2014 20-gd.ini -> ../../mods-available/gd.ini
   * lrwxrwxrwx 1 root root 30 nov 24  2014 20-pgsql.ini -> ../../mods-available/pgsql.ini
   * lrwxrwxrwx 1 root root 34 nov 24  2014 20-pdo_pgsql.ini -> ../../mods-available/pdo_pgsql.ini
   * lrwxrwxrwx 1 root root 29 gen 29  2015 20-curl.ini -> ../../mods-available/curl.ini
   *
   */

  /*
   * /etc/php5/apache2
   * php.ini
   *
   */

  /*
   * In computing, Server Application Programming Interface (SAPI) is the direct module interface
   * to web servers such as the Apache HTTP Server, Microsoft IIS, and Oracle iPlanet Web Server.
   * Microsoft also uses the term Internet Server Application Programming Interface (ISAPI),
   * and the defunct Netscape web server used the term Netscape Server Application Programming
   * Interface (NSAPI) for the same purpose.[1] In other words, SAPI is actually an application
   * programming interface (API) provided by the web server to help other developers in extending
   * the web server capabilities.
   * As an example, PHP has a direct module interface called SAPI for different web servers;[2]
   * in case of PHP 5 and Apache 2.0 on Windows, it is provided in form of a DLL file called
   * php5apache2.dll,[3] which is a module that, among other functions, provides an interface
   *  between PHP and the web server, implemented in a form that the server understands. This
   * form is what is known as a SAPI.
   * There are different kinds of SAPIs for various web server extensions.
   * For example, another two SAPIs for the PHP language are Common Gateway
   * Interface (CGI) and command-line interface (CLI).[2][4]
   *
   * If you run your own server go the module way, it's somewhat faster.
   * If you're on a shared server the decision has already been taken for you,
   * usually on the CGI side. The reason for this are filesystem permissions.
   * PHP as a module runs with the permissions of the http server (usually 'apache')
   * and unless you can chmod your scripts to that user you have to chmod them to 777 -
   * world readable. This means, alas, that your server neighbour can take a look at them -
   * think of where you store the database access password. Most shared servers have solved
   * this using stuff like phpsuexec and such, which run scripts with the permissions of the
   * script owner, so you can (must) have your code chmoded to 644. Phpsuexec runs only with
   * PHP as CGI - that's more or less all, it's just a local machine thing -
   * makes no difference to the world at large.
   *
   * When using CGI : a PHP process is launched by Apache,
   * and it is that PHP process that interprets PHP code -- not Apache itself.
   * In theory, a distinct PHP process has to be created for each request --
   * which makes things slower : Apache has more work to do to answer a request.
   * Well, as pointed out by @AlReece45 in a comment, this can be made better using FastCGI)
   * When using PHP as an Apache module (mod_php, or mod_php5), the PHP interpreter
   * is kind of "embedded" inside the Apache process : there is no external PHP process.
   * Which means :
   * No forking to answer a request (faster)
   * Better communication between Apache and PHP
   * Generally speaking, I would say that mod_php is the solution that's used the most.
   *
   * PHP in modalità MOD usa + memoria
   */