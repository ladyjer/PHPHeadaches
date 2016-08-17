<?php
/**
 * _1_visibilita.php
 *
 * PHP version 5
 *
 * @category   Joomla_Components
 * @package    Joomla.Administrator
 * @subpackage Com_Arxivar
 * @author     Mariella Colombo <mariella.colombo@ladyj.eu>
 * @copyright  Copyright © 2016 Colombo Mariella
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://www.ladyj.eu
 */

/*
 * The manual says that "Private limits visibility only to the class that defines the item". 
 * That means extended children classes do not see the private methods of parent class and vice versa also. 

As a result, parents and children can have different implementations of the "same" 
private methods, depending on where you call them (e.g. parent or child class instance). 
Why? Because private methods are visible only for the class that defines them and the child class 
does not see the parent's private methods. If the child doesn't see the parent's private methods, 
the child can't override them. Scopes are different. In other words -- each class has a private set 
of private variables that no-one else has access to.
 */

class A {
	private $v = 10;
	public static $x = 10;
	
	public function test() {
		echo get_class($this),"\n";//B
		echo $this->v,"\n";//10
		echo $this::$x,"\n";//20
		echo A::$x,"\n";//10
	}
}

class B extends A {
	public static $x = 20;

	private $v = 20;
}

$b = new b;
$b->test();//B 10 20 10

class X {
	private $v = 10;
	public static $x = 10;

	public function test() {
		echo get_class($this),"\n";//Y
		echo $this->v,"\n";//10
		echo $this::$x,"\n";//20
		echo X::$x,"\n";//10
	}
}

class Y extends X {
	public static $x = 20;
	public $v = 20;
}

$y = new Y;
$y->test();//Y 10 20 10

/*
 * Mi sarei aspettata 20 20 10 ma a questo punto non è così....
 * Se un qualcosa nel contensto della classe che sta eseguendo il codice è privato
 * e il codice usa quella variabile privata, viene presa quella locale
 */