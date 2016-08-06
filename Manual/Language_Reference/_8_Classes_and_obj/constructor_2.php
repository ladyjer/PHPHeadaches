<?php
/**
 * Created by IntelliJ IDEA.
 * User: ColomboM
 * Date: 02/12/14
 * Time: 14:42
 *
 * Note: Parent constructors are not called implicitly
 * if the child class defines a constructor. In order
 * to run a parent constructor, a call to parent::__construct()
 * within the child constructor is required.
 * If the child does not define a constructor
 * then it may be inherited from the parent class just like
 * a normal class method (if it was not declared as private).
 *
 * For backwards compatibility, if PHP 5 cannot find
 * a __construct() function for a given class, and the class
 * did not inherit one from a parent class, it will search for
 * the old-style constructor function, by the name of the class.
 * Effectively, it means that the only case that would have
 * compatibility issues is if the class had a method
 * named __construct() which was used for different semantics.
 *
 * Unlike with other methods, PHP will not generate an E_STRICT
 * level error message when __construct() is overridden with
 * different parameters than the parent __construct() method has.
 *
 * As of PHP 5.3.3, methods with the same name as the last
 * element of a namespaced class name will no longer be
 * treated as constructor. This change doesn't affect
 * non-namespaced classes.
 */

namespace {

    class Babar
    {
        public function Babar()
        {
            echo __METHOD__,"\n";
        }
    }

    new Babar(); //Babar::Babar

    class Babarer
    {
        public function Babarer($x)
        {
            echo __METHOD__,"\n";
        }
    }

    new Babarer(); //Babarer::Babarer + PHP Warning:  Missing argument 1 for Babarer::Babarer(), called in

}

namespace ciao {
    class BabarerX
    {
        public function BabarerX($x)
        {
            echo __METHOD__,"\n";
        }
    }

    $x = new BabarerX();//non viene chiamato il metodo sopra
    //devo chiamarlo esplicitamente
    $x->BabarerX(1);//ciao\BabarerX::BabarerX
}
