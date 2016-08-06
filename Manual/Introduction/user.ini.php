<?php
 /*
  * Since PHP 5.3.0, PHP includes support for configuration INI files on a per-directory basis.
  * These files are processed only by the CGI/FastCGI SAPI. This functionality obsoletes the PECL
  *  htscanner extension. If you are using Apache, use .htaccess files for the same effect.
  * In addition to the main php.ini file, PHP scans for INI files in each directory,
  * starting with the directory of the requested PHP file, and working its way up to
  * the current document root (as set in $_SERVER['DOCUMENT_ROOT']). In case the PHP file
  * is outside the document root, only its directory is scanned.
  * Only INI settings with the modes PHP_INI_PERDIR and PHP_INI_USER will be recognized in .user.ini-style INI files.
  * Two new INI directives, user_ini.filename and user_ini.cache_ttl control the use of user INI files.
  * user_ini.filename sets the name of the file PHP looks for in each directory; if set to an empty string, PHP doesn't scan at all. The default is .user.ini.
  * user_ini.cache_ttl controls how often user INI files are re-read. The default is 300 seconds (5 minutes).
  */
 ini_set('error_reporting', 1);//in client mode va usato init_set (user.ini NON VA)
 echo $c;// Notice: Undefined variable: c in /var/www/html/phpcert/Manual/Introduction/user.ini.php on line 2
 /*
  * Se aggiungo .htaccess come in questa directory, l'errore non compare.
  * When using PHP as an Apache module, you can also change the configuration
  * settings using directives in Apache configuration files (e.g. httpd.conf) and .htaccess files.
  * You will need "AllowOverride Options" or "AllowOverride All" privileges to do so.
  *
  * In httpd.conf posso usare anche php_admin_value/flag che non possono essere sovrascritti da .htaccess o ini_set
  *
  * <IfModule mod_php5.c>
  * php_value include_path ".:/usr/local/lib/php"
  *   php_admin_flag engine on
  * </IfModule>
  *
  * PHP constants do not exist outside of PHP. For example, in httpd.conf you can not use PHP constants such as E_ALL or
  * E_NOTICE to set the error_reporting directive as they will have no meaning and will evaluate to 0.
  * Use the associated bitmask values instead. These constants can be used in php.ini
  */