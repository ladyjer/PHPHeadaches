<?php
/**
 * Created by IntelliJ IDEA.
 * User: ColomboM
 * Date: 16/04/15
 * Time: 15:11
 *
 * Session support in PHP consists of a way to preserve certain data across subsequent accesses.
 *
 * A visitor accessing your web site is assigned a unique id, the so-called session id.
 * This is either stored in a cookie on the user side or is propagated in the URL.
 *
 * The session support allows you to store data between requests in the $_SESSION superglobal array.
 * When a visitor accesses your site, PHP will check automatically (if session.auto_start is set to 1)
 * or on your request (explicitly through session_start()) whether a specific session id has
 * been sent with the request. If this is the case, the prior saved environment is recreated.
 * Caution
*
 *  If you turn on session.auto_start then the only way to put objects into your sessions
* is to load its class definition using auto_prepend_file in which
* you load the class definition else you will have to serialize()
* your object and unserialize() it afterwards.
 *
 * $_SESSION (and all registered variables) are serialized internally by PHP using the
* serialization handler specified by the session.serialize_handler ini setting,
 *
 * nel php.ini session.serialize_handler = php
* session.save_handler = file
* session.save_path = /tmp
*
 * after the request finishes. Registered variables which are undefined are marked as being not defined.
 * On subsequent accesses, these are not defined by the session module unless the user defines them later.
 * Serialize handlers (php and php_binary) inherit register_globals limitations.
 * Therefore, numeric index or string index contains special characters (| and !) cannot be used.
 * Using these will end up with errors at script shutdown. php_serialize does not have such limitations.
 * php_serialize is available from PHP 5.5.4.
 *
 * Because session data is serialized, resource variables cannot be stored in the session.
 *
 * By default, all data related to a particular session will be stored in a file in the directory
* specified by the session.save_path INI option. A file for each session (regardless of if any
    * data is associated with that session) will be created. This is due to the fact that a
* session is opened (a file is created) but no data is even written to that file.
 * Note that this behavior is a side-effect of the limitations of working with the
* file system and it is possible that a custom session handler (such as one which uses a database)
 * does not keep track of sessions which store no data.
 */

 var_dump(SID); //PHP Notice undefined constant
 var_dump(PHP_SESSION_DISABLED);//0 Since PHP 5.4.0. Return value of session_status() if sessions are disabled.
 var_dump(PHP_SESSION_NONE);//1 Since PHP 5.4.0. Return value of session_status() if sessions are enabled, but no session exists.
 var_dump(PHP_SESSION_ACTIVE);//2 Since PHP 5.4.0. Return value of session_status() if sessions are enabled, and a session exists.
 var_dump(session_status());//1 quindi il sistema delle sessioni è attivo ma non esiste alcuna sessione