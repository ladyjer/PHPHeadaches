<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/24/14
 * Time: 4:26 PM
 *
 * When using the HTTP wrapper, $http_response_header will be populated with the HTTP response headers
 */
file_get_contents("http://example.com");
var_dump($http_response_header);

/*
array(13) {
  [0]=>
  string(15) "HTTP/1.0 200 OK"
  [1]=>
  string(20) "Accept-Ranges: bytes"
  [2]=>
  string(29) "Cache-Control: max-age=604800"
  [3]=>
  string(23) "Content-Type: text/html"
  [4]=>
  string(35) "Date: Fri, 24 Oct 2014 14:27:31 GMT"
  [5]=>
  string(17) "Etag: "359670651""
  [6]=>
  string(38) "Expires: Fri, 31 Oct 2014 14:27:31 GMT"
  [7]=>
  string(44) "Last-Modified: Fri, 09 Aug 2013 23:54:35 GMT"
  [8]=>
  string(22) "Server: ECS (iad/182A)"
  [9]=>
  string(12) "X-Cache: HIT"
  [10]=>
  string(20) "x-ec-custom-error: 1"
  [11]=>
  string(20) "Content-Length: 1270"
  [12]=>
  string(17) "Connection: close"
}
 */