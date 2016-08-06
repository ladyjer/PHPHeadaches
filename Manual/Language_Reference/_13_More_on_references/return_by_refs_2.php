<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/21/14
 * Time: 11:04 PM
 */
function &collector() {
    static $collection = array();
    return $collection;
}
$collection = &collector();
$collection[] = 'foo';
var_dump($collection);
$collection = &collector();
$collection[] = 'foo';
var_dump($collection);
/*
array(1) {
  [0]=>
  string(3) "foo"
}
array(2) {
  [0]=>
  string(3) "foo"
  [1]=>
  string(3) "foo"
}
 */