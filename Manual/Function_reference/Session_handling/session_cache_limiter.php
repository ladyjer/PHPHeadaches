<?php
/**
 * session_cache_limiter.php
 *
 * PHP version 5
 *
 * The cache limiter defines which cache control HTTP headers are sent to the client.
 * These headers determine the rules by which the page content may be cached by the client
 * and intermediate proxies. Setting the cache limiter to nocache disallows any client/proxy caching.
 * A value of public permits caching by proxies and the client,
 * whereas private disallows caching by proxies and permits the client to cache the contents.
 *
 * The cache limiter is reset to the default value stored in session.cache_limiter
 * at request startup time. Thus, you need to call session_cache_limiter()
 * for every request (and before session_start() is called).
 *
 * session_commit is an alias af session_write_close
 */
