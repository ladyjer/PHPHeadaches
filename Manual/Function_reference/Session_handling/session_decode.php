<?php
/**
 * session_decode.php
 *
 * PHP version 5
 *
 * @category   Joomla_Components
 * @package    Joomla.Administrator
 * @subpackage Com_Arxivar
 * @author     Mariella Colombo <mariella.colombo@ladyj.eu>
 * @copyright  Copyright © 2016 Colombo Mariella
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://www.ladyj.eu
 */
var_dump(PHP_SESSION_DISABLED);//0
var_dump(PHP_SESSION_NONE);//1
var_dump(PHP_SESSION_ACTIVE);//2

echo session_status();//1
var_dump($_SESSION); //Undefined variable: _SESSION
session_start();
echo session_status();//2
var_dump($_SESSION); //array (size=0) empty
$_SESSION['ciao'] = 'miao';
echo session_status();//1
var_dump($_SESSION); //array (size=1)
//'ciao' => string 'miao' (length=4)
echo session_encode();//ciao|s:4:"miao";
unset($_SESSION['ciao']);
var_dump($_SESSION); //array (size=0)
						//empty
session_decode('ciao|s:4:"miao";');
var_dump($_SESSION); //array (size=1)
//'ciao' => string 'miao' (length=4)

//session_destroy() destroys all of the data associated with the current session.
// It does not unset any of the global variables associated with the session,
// or unset the session cookie. To use the session variables again, session_start() has to be called.
//In order to kill the session altogether, like to log the user out, the session id must also be unset.
// If a cookie is used to propagate the session id (default behavior),
// then the session cookie must be deleted. setcookie() may be used for that.

var_dump(session_get_cookie_params());
/*
array (size=5)
  'lifetime' => int 0
  'path' => string '/' (length=1)
  'domain' => string '' (length=0)
  'secure' => boolean false
  'httponly' => boolean false
 */
echo session_name(); //Nome del cookie, PHPSESSID
echo session_id(), "\n";//9vh76miva77fkedgjihnjhrib6
echo session_module_name();//files

/*
bool session_regenerate_id ([ bool $delete_old_session = false ] )
session_regenerate_id() will replace the current session id with a new one, and keep the current session information.
 */
session_regenerate_id(); //Il contenuto delle variabili viene mantenuto. cambia solo l'ID
echo session_name(); //Nome del cookie, PHPSESSID
echo session_id(), "\n";//trtcb3aa7kur6m4rmla4me94n7
var_dump($_SESSION);
/*
array (size=1)
  'ciao' => string 'miao' (length=4)
 */

/*
 *
 * session_reset() reinitializes a session with original values stored in session storage.
 * This function requires an active session and discards changes in $_SESSION.
 */

echo session_save_path();///var/lib/php5

/*
void session_set_cookie_params ( int $lifetime [, string $path [, string $domain [, bool $secure = false [, bool $httponly = false ]]]] )
Set cookie parameters defined in the php.ini file. The effect of this function only lasts for the duration of the script.
Thus, you need to call session_set_cookie_params() for every request and before session_start() is called.
 */


/*
session_start() creates a session or resumes the current one based on a
session identifier passed via a GET or POST request, or passed via a cookie.
 */

//void session_unset ( void )
// If $_SESSION (or $HTTP_SESSION_VARS for PHP 4.0.6 or less) is used,
// use unset() to unregister a session variable, i.e. unset ($_SESSION['varname']);.
session_unset();
var_dump($_SESSION); //array (size=0)
                    //empty

//void session_write_close ( void )
//End the current session and store session data.
/*
Session data is usually stored after your script terminated without the need to call session_write_close(),
but as session data is locked to prevent concurrent writes only one script may operate on a session at any time.
When using framesets together with sessions you will experience the frames loading one by one due to this locking.
You can reduce the time needed to load all the frames by ending the session as soon as all changes to session variables are done.
CON AJAX ANCHE, E' meglio usarlo
 */