<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/26/14
 * Time: 5:53 PM
 *
 * Permette agli oggetti di essere acceduti come se fossero degli array
 */

 class Oggetto implements ArrayAccess {
     private $miao = 'cippa';
     private $bau  = 'xxxxx';

     private $varie = array();


     /**
      * (PHP 5 &gt;= 5.0.0)<br/>
      * Whether a offset exists
      * @link http://php.net/manual/en/arrayaccess.offsetexists.php
      * @param mixed $offset <p>
      * An offset to check for.
      * </p>
      * @return boolean true on success or false on failure.
      * </p>
      * <p>
      * The return value will be casted to boolean if non-boolean was returned.
      */
     public function offsetExists($offset)
     {
         echo __METHOD__,PHP_EOL;
         if     ($offset == 2) return isset($this->miao);
         elseif ($offset == 4) return isset($this->bau);
         else   return isset($this->varie[$offset]);
     }

     /**
      * (PHP 5 &gt;= 5.0.0)<br/>
      * Offset to retrieve
      * @link http://php.net/manual/en/arrayaccess.offsetget.php
      * @param mixed $offset <p>
      * The offset to retrieve.
      * </p>
      * @return mixed Can return all value types.
      */
     public function offsetGet($offset)
     {
         echo $offset," - ",__METHOD__,PHP_EOL;
         if ($offset == 2) $x =& $this->miao;
         elseif ($offset == 4) $x =& $this->bau;
         else $x =& $this->varie[$offset];
         return (isset($x) ? $x : null);
     }

     /**
      * (PHP 5 &gt;= 5.0.0)<br/>
      * Offset to set
      * @link http://php.net/manual/en/arrayaccess.offsetset.php
      * @param mixed $offset <p>
      * The offset to assign the value to.
      * </p>
      * @param mixed $value <p>
      * The value to set.
      * </p>
      * @return void
      */
     public function offsetSet($offset, $value)
     {
         if (is_null($offset)) {
           $this->varie[] = $value;
         } else {
             if ($offset == 2) $x =& $this->miao;
             elseif ($offset == 4) $x =& $this->bau;
             else   $x =& $this->varie[$offset];

             $x = $value;
         }
     }

     /**
      * (PHP 5 &gt;= 5.0.0)<br/>
      * Offset to unset
      * @link http://php.net/manual/en/arrayaccess.offsetunset.php
      * @param mixed $offset <p>
      * The offset to unset.
      * </p>
      * @return void
      */
     public function offsetUnset($offset)
     {
         if ($offset == 2)     unset($this->miao);
         elseif ($offset == 4) unset($this->bau);
         else unset ($this->varie[$offset]);
     }
 }

 $o = new Oggetto();
 var_dump($o);
/*
object(Oggetto)#1 (3) {
  ["miao":"Oggetto":private]=>
  string(5) "cippa"
  ["bau":"Oggetto":private]=>
  string(5) "xxxxx"
  ["varie":"Oggetto":private]=>
  array(0) {
  }
}
 */
 echo $o[2],PHP_EOL;
 echo $o[0],PHP_EOL;
/*
2 - Oggetto::offsetGet
cippa
0 - Oggetto::offsetGet

 */
 $o[0] = 1000;
 $o[] = 9999;
 var_dump($o);
/*
object(Oggetto)#1 (3) {
  ["miao":"Oggetto":private]=>
  string(5) "cippa"
  ["bau":"Oggetto":private]=>
  string(5) "xxxxx"
  ["varie":"Oggetto":private]=>
  array(2) {
    [0]=>
    int(1000)
    [1]=>
    int(9999)
  }
}
 */

 if (isset($o[5])) echo "C'è",PHP_EOL;
 //Oggetto::offsetExists,  non stampa la frase
 unset($o[2]);
 var_dump($o);
/*
object(Oggetto)#1 (2) {
  ["bau":"Oggetto":private]=>
  string(5) "xxxxx"
  ["varie":"Oggetto":private]=>
  array(2) {
    [0]=>
    int(1000)
    [1]=>
    int(9999)
  }
}
 */