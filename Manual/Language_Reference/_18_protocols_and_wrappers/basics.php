<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 01/11/14
 * Time: 16.46
 *
 * file:// — Accessing local filesystem
 * Filesystem is the default wrapper used with PHP and represents the local filesystem.
 * When a relative path is specified (a path which does not begin with /, \, \\,
 * or a Windows drive letter) the path provided will be applied against
 * the current working directory. In many cases this is the directory in
 * which the script resides unless it has been changed.
 *
 * http:// -- https:// — Accessing HTTP(s) URLs - Restricted by allow_url_fopen
 */

$url = 'http://www.example.com';
$fp = fopen($url, 'r');

$meta_data = stream_get_meta_data($fp);// Retrieves header/meta data from streams/file pointers
foreach ($meta_data['wrapper_data'] as $response) {
    echo $response,PHP_EOL;
}
/*
HTTP/1.0 200 OK
Accept-Ranges: bytes
Cache-Control: max-age=604800
Content-Type: text/html
Date: Sat, 01 Nov 2014 15:54:27 GMT
Etag: "359670651"
Expires: Sat, 08 Nov 2014 15:54:27 GMT
Last-Modified: Fri, 09 Aug 2013 23:54:35 GMT
Server: ECS (iad/182A)
X-Cache: HIT
x-ec-custom-error: 1
Content-Length: 1270
Connection: close
 */


 /*ftp:// -- ftps:// — Accessing FTP(s) URLs
 Allows read access to existing files and creation of new files via FTP.
 If the server does not support passive mode ftp, the connection will fail.
 FTPS is only supported when the openssl extension is enabled.
 If the server does not support SSL, then the connection falls back to regular unencrypted ftp.
 ammessa lettura, scrittura e anche appending
 */
