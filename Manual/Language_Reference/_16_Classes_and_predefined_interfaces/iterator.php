<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/26/14
 * Time: 5:14 PM
 *
 * Iterator extends Traversable {
   Methods
abstract public mixed current ( void )
abstract public scalar key ( void )
abstract public void next ( void )
abstract public void rewind ( void )
abstract public boolean valid ( void )
}
 *
 */
 namespace mari;

 class Fumagalli implements \Iterator {
     private $i;

     /**
      * (PHP 5 &gt;= 5.0.0)<br/>
      * Return the current element
      * @link http://php.net/manual/en/iterator.current.php
      * @return mixed Can return any type.
      */
     public function current()
     {
        echo __METHOD__,PHP_EOL;
        switch ($this->i) {
            case 0: return 'Papa'; break;
            case 1: return 'Mamma'; break;
            case 2: return 'Giulia'; break;
            case 3: return 'Lucia'; break;
            default: return NULL;
        }
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
         $this->i++;
     }

     /**
      * (PHP 5 &gt;= 5.0.0)<br/>
      * Return the key of the current element
      * Returns scalar on success, or NULL on failure.
      * @link http://php.net/manual/en/iterator.key.php
      * @return mixed scalar on success, or null on failure.
      */
     public function key()
     {
         echo __METHOD__,PHP_EOL;
         return $this->i;
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
         return $this->i < 4;
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
         $this->i = 0;
     }
 }

 $fums = new Fumagalli();

 foreach ($fums as $k => $v) {
     echo $k, "-",$v,PHP_EOL;
 }

 foreach ($fums as $v) {
    echo $v,PHP_EOL;
 }

 if ($fums instanceof \Traversable) {
     echo "E' traversabile",PHP_EOL;   //stampa
 }
/*
mari\Fumagalli::rewind
mari\Fumagalli::valid
mari\Fumagalli::current
mari\Fumagalli::key
0-Papa
mari\Fumagalli::next
mari\Fumagalli::valid
mari\Fumagalli::current
mari\Fumagalli::key
1-Mamma
mari\Fumagalli::next
mari\Fumagalli::valid
mari\Fumagalli::current
mari\Fumagalli::key
2-Giulia
mari\Fumagalli::next
mari\Fumagalli::valid
mari\Fumagalli::current
mari\Fumagalli::key
3-Lucia
mari\Fumagalli::next
mari\Fumagalli::valid
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
E' traversabile
 */