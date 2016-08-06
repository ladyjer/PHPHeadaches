<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/11/14
 * Time: 5:47 PM
 */
 class A implements iterator {
     private $a = array();

     public function __construct(array $c) {
         echo __METHOD__,PHP_EOL;
         $this->a = $c;
     }

     /**
      * (PHP 5 &gt;= 5.0.0)<br/>
      * Return the current element
      * @link http://php.net/manual/en/iterator.current.php
      * @return mixed Can return any type.
      */
     public function current()
     {
        echo __METHOD__,PHP_EOL;
        return current($this->a);
     }

     /**
      * (PHP 5 &gt;= 5.0.0)<br/>
      * Move forward to next element
      * @link http://php.net/manual/en/iterator.next.php
      * @return void Any returned value is ignored.
      */
     public function next()
     {
         echo __METHOD__,PHP_EOL;
         next($this->a);
     }

     /**
      * (PHP 5 &gt;= 5.0.0)<br/>
      * Return the key of the current element
      * @link http://php.net/manual/en/iterator.key.php
      * @return mixed scalar on success, or null on failure.
      */
     public function key()
     {
         echo __METHOD__,PHP_EOL;
         return key($this->a);
     }

     /**
      * (PHP 5 &gt;= 5.0.0)<br/>
      * Checks if current position is valid
      * @link http://php.net/manual/en/iterator.valid.php
      * @return boolean The return value will be casted to boolean and then evaluated.
      * Returns true on success or false on failure.
      */
     public function valid()
     {
         echo __METHOD__,PHP_EOL;
         $key = key($this->a);
         return ($key !== NULL && $key !== FALSE);
     }

     /**
      * (PHP 5 &gt;= 5.0.0)<br/>
      * Rewind the Iterator to the first element
      * @link http://php.net/manual/en/iterator.rewind.php
      * @return void Any returned value is ignored.
      */
     public function rewind()
     {
         echo __METHOD__,PHP_EOL;
         reset($this->a);
     }
 }

 $a = new A(range(1,3));
 foreach ($a as $k => $v) {
    echo $k,"-->",$v,PHP_EOL;
 }
/*
A::__construct
A::rewind
A::valid
A::current
A::key
0-->1
A::next
A::valid
A::current
A::key
1-->2
A::next
A::valid
A::current
A::key
2-->3
A::next
A::valid
 */
echo "..........................",PHP_EOL;
foreach ($a as $v) {
    echo "-->",$v,PHP_EOL;
}
/***** n
 * on chiama mai KEY
A::rewind
A::valid
A::current
-->1
A::next
A::valid
A::current
-->2
A::next
A::valid
A::current
-->3
A::next
A::valid

 */
