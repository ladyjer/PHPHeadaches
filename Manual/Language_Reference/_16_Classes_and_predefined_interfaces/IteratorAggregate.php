<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/26/14
 * Time: 5:31 PM
 *
 * IteratorAggregate extends Traversable {
 * Methods
 * abstract public Traversable getIterator ( void )
 *
 */
 require 'iterator.php';

 class Famiglia implements IteratorAggregate {
     private $fumagalli;

     public function __construct() {
         $this->fumagalli = new \mari\Fumagalli();
     }

     /**
      * (PHP 5 &gt;= 5.0.0)<br/>
      * Retrieve an external iterator
      * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
      * @return Traversable An instance of an object implementing <b>Iterator</b> or
      * <b>Traversable</b>
      * abstract public Traversable IteratorAggregate::getIterator ( void )
      */
     public function getIterator()
     {
         return $this->fumagalli;
     }
 }

 $fami = new Famiglia();
 echo '.......................',PHP_EOL;
 foreach ($fami as $v) {
    echo $v,PHP_EOL;
 }
/*
mari\Fumagalli::rewind
mari\Fumagalli::valid
mari\Fumagalli::current
Papa
mari\Fumagalli::next
mari\Fumagalli::valid
mari\Fumagalli::current
Mamma
mari\Fumagalli::next
mari\Fumagalli::valid
mari\Fumagalli::current
Giulia
mari\Fumagalli::next
mari\Fumagalli::valid
mari\Fumagalli::current
Lucia
mari\Fumagalli::next
mari\Fumagalli::valid
 */