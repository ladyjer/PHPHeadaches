<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/24/14
 * Time: 2:40 PM
 *
 *
 * l'array associativo $_REQUEST contiene la somma di:
 * An associative array that by default contains the contents of $_GET, $_POST and $_COOKIE.
 *
 * All'inizio FILES era incluso, poi è stato tolto dalla request dalla 4.3
 *
 * VARIABLES_ORDER nel php.ini
 * Sets the order of the EGPCS (Environment, Get, Post, Cookie, and Server) variable parsing.
 * For example, if variables_order is set to "SP" then PHP will create the
 * superglobals $_SERVER and $_POST, but not create $_ENV, $_GET,
 * and $_COOKIE. Setting to "" means no superglobals will be set.
 * If the deprecated register_globals directive is on, then variables_order
 * also configures the order the ENV, GET, POST, COOKIE and SERVER variables
 * are populated in global scope. So for example if variables_order is set to "EGPCS",
 * register_globals is enabled, and both $_GET['action'] and $_POST['action'] are set,
 * then $action will contain the value of $_POST['action'] as P comes after G in our example directive value.
 * In both the CGI and FastCGI SAPIs, $_SERVER is also populated by values from the environment;
 * S is always equivalent to ES regardless of the placement of E elsewhere in this directive.
 * The content and order of $_REQUEST is also affected by this directive.
 *
 * request_order string nel PHP.ini
 * This directive describes the order in which PHP registers GET, POST and Cookie variables
 * into the _REQUEST array. Registration is done from left to right, newer values override older values.
 * If this directive is not set, variables_order is used for $_REQUEST contents.
 * Note that the default distribution php.ini files does not contain the 'C' for cookies, due to security concerns.
 * Se questa variabile è uguale a '', la _REQUEST viene caricata usando variable_orders
 */ 