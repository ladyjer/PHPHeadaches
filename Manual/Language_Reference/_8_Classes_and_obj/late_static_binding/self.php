<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/12/14
 * Time: 10:37 PM
 *
 * Static references to the current
 * class like self:: or __CLASS__ are resolved using the
 * class in which the function belongs, as in where it was defined:
 *
 *
 * LIMITI DI SELF
 *
 * nota che i metodi sono statici
 *
 */

class A {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        self::who();//<<<<<<<<<<<<<<<<<
    }
}

class B extends A {
    public static function who() {
        echo __CLASS__;
    }
}

B::test();//A