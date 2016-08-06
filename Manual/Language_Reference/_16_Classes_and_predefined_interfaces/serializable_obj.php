<?php
/**
 * Created by IntelliJ IDEA.
 * User: ColomboM
 * Date: 28/10/14
 * Time: 16:36
 *
 * Classes that implement this interface no longer support __sleep() and __wakeup()
 */
 class Obj implements Serializable {
     private $a = 10;

     public function __sleep() {
         echo __METHOD__,PHP_EOL;
         return array('a');
     }

     public function __wakeup() {
         echo __METHOD__,PHP_EOL;
     }

     /**
      * (PHP 5 &gt;= 5.1.0)<br/>
      * String representation of object
      * @link http://php.net/manual/en/serializable.serialize.php
      * @return string the string representation of the object or null
      */
     public function serialize()
     {
         echo __METHOD__,PHP_EOL;
         return (string) $this->a;
     }

     /**
      * (PHP 5 &gt;= 5.1.0)<br/>
      * Constructs the object
      * @link http://php.net/manual/en/serializable.unserialize.php
      * @param string $serialized <p>
      * The string representation of the object.
      * </p>
      * @return void
      */
     public function unserialize($serialized)
     {
         echo __METHOD__,PHP_EOL;
         $this->a = (int) $serialized;
     }
 }
