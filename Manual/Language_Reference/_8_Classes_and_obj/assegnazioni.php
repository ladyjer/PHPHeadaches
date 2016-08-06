<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/1/14
 * Time: 12:29 PM
 */

 class a {

 }

 $a =  new a();
 $c =  $a;
 $d =& $a;
 $a->x = 100;
 xdebug_debug_zval('a');
 xdebug_debug_zval('c');
 xdebug_debug_zval('d');
/*
a:
(refcount=2, is_ref=1),
object(a)[1]
  public 'x' => (refcount=1, is_ref=0),int 100

c:
(refcount=1, is_ref=0),
object(a)[1]
  public 'x' => (refcount=1, is_ref=0),int 100

d:
(refcount=2, is_ref=1),
object(a)[1]
  public 'x' => (refcount=1, is_ref=0),int 100
*/
 echo $a->x, "<br>";
 echo $c->x, "<br>";
 echo $d->x, "<br>";
 $a = null;
 xdebug_debug_zval('a');
 xdebug_debug_zval('c');
 xdebug_debug_zval('d');
/*
a:
(refcount=2, is_ref=1),null

c:
(refcount=1, is_ref=0),
object(a)[1]
  public 'x' => (refcount=1, is_ref=0),int 100

d:
(refcount=2, is_ref=1),null
 */
echo $a->x, "<br>";//Notice: Trying to get property of non-object
echo $c->x, "<br>";
echo $d->x, "<br>";//Notice: Trying to get property of non-object