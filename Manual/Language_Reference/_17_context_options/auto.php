<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 02/11/14
 * Time: 19.43
 *
 * Simula un submit.
 */

$postdata = http_build_query(
    array(
        'nome' => 'Mari'
    )
);

$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $postdata
    )
);

$context = stream_context_create($opts);
$result = file_get_contents('http://localhost/phpcert/Manual/Language_Reference/_15_context_opt/index.php', false, $context);
echo $result,PHP_EOL;
/*
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h1>Mari</h1>
        <form method="post">
       <input name="nome" value=""/>
       <button type="submit" name="ok">Vai</button>
    </form>
</body>
</html>
 */
echo "......................................",PHP_EOL;
$stream = fopen('http://localhost/phpcert/Manual/Language_Reference/_15_context_opt/index.php', 'r', false, $context);
// header information as well as meta data
// about the stream
var_dump(stream_get_meta_data($stream));
// actual data at $url
var_dump(stream_get_contents($stream));
fclose($stream);

/*
array(10) {
  'wrapper_data' =>
  array(8) {
    [0] =>
    string(15) "HTTP/1.1 200 OK"
    [1] =>
    string(35) "Date: Sun, 02 Nov 2014 18:48:54 GMT"
    [2] =>
    string(29) "Server: Apache/2.4.7 (Ubuntu)"
    [3] =>
    string(34) "X-Powered-By: PHP/5.5.9-1ubuntu4.5"
    [4] =>
    string(21) "Vary: Accept-Encoding"
    [5] =>
    string(19) "Content-Length: 265"
    [6] =>
    string(17) "Connection: close"
    [7] =>
    string(23) "Content-Type: text/html"
  }
  'wrapper_type' =>
  string(4) "http"
  'stream_type' =>
  string(14) "tcp_socket/ssl"
  'mode' =>
  string(1) "r"
  'unread_bytes' =>
  int(265)
  'seekable' =>
  bool(false)
  'uri' =>
  string(76) "http://localhost/phpcert/Manual/Language_Reference/_15_context_opt/index.php"
  'timed_out' =>
  bool(false)
  'blocked' =>
  bool(true)
  'eof' =>
  bool(false)
}
string(265) "<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h1>Mari</h1>
        <form method="post">
       <input name="nome" value=""/>
       <button type="submit" name="ok">Vai</button>
    </form>
</body>
</html>"
 */