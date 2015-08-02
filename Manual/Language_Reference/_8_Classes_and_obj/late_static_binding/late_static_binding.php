<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/12/14
 * Time: 10:39 PM
 *
 * Late static bindings tries to solve that limitation by introducing a keyword
 * that references the class that was initially called at runtime. Basically,
 * a keyword that would allow you to reference B from test() in the previous example.
 * It was decided not to introduce a new keyword but rather use static that was already reserved.
 *
 * nota che i metodi sono statici
 *
 */
class A {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        static::who(); // Here comes Late Static Bindings
    }
}

class B extends A {
    public static function who() {
        echo __CLASS__;
    }
}

B::test(); //B