<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/12/14
 * Time: 10:59 PM
 *
 * Late static bindings' resolution will stop at a fully resolved static call with no fallback.
 * On the other hand, static calls
 * using keywords like parent:: or self:: will forward the calling information.
 */
class A {
    public static function foo() {
        static::who();
    }

    public static function who() {
        echo __CLASS__."\n";
    }
}

class B extends A {
    public static function test() {
        echo "1.";A::foo();
        echo "2.";static::foo();
        echo "3.";parent::foo();
        echo "4.";self::foo();
    }

    public static function foo() {
        echo __METHOD__,PHP_EOL;
        parent::foo();
    }

    public static function who() {
        echo __CLASS__."\n";
    }
}
class C extends B {
    public static function who() {
        echo __CLASS__."\n";
    }
}

C::test();

/*
1.A
2.B::foo
C
3.C
4.B::foo
C
 */