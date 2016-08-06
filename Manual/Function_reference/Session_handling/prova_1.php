<?php
/**
 * Sessions follow a simple workflow. When a session is started,
 * PHP will either retrieve an existing session using the ID passed
 * (usually from a session cookie) or if no session is passed it will
 * create a new session. PHP will populate the $_SESSION superglobal
 * with any session data after the session has started. When PHP shuts down,
 * it will automatically take the contents of the $_SESSION superglobal,
 * serialize it, and send it for storage using the session save handler.
 *
 * Sessions normally shutdown automatically
 * when PHP is finished executing a script,
 * but can be manually shutdown using the session_write_close() function.
 * 
 * File based sessions (the default in PHP) lock the session file once a session 
 * is opened via session_start() or implicitly via session.auto_start.
 * Once locked, no other script can access the same session file until
 * it has been closed by the first script terminating or calling session_write_close().
 */
var_dump(SID); //PHP Notice undefined constant
session_start();
var_dump(SID); //string 'PHPSESSID=6jkgvkfi5m9scmkvm60g8ftml2' (length=36) (ma solo alla prima volta, poi diventa vuoto)
echo session_id(), "\n";//6jkgvkfi5m9scmkvm60g8ftml2 - sempre
echo gettype(session_id()); //string

if (empty($_SESSION['cnt'])) {
    $_SESSION['cnt'] = 0;
}

$_SESSION['cnt']++;
?>

<p>
    Hello visitor, you have seen this page <?php echo $_SESSION['cnt']; ?> times.
</p>
