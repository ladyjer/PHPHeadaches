<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/12/14
 * Time: 10:41 PM
 *
 *
 * In non-static contexts, the called class will be the class of the object instance.
 * Since $this-> will try to call private methods from the same scope,
 * using static:: may give different results.
 *
 * Another difference is that static:: can only refer to static properties.
 *
 * Lo Yo_yo funziona così: lui prova a scendere fino alla classe di qui è instanza this,
 * alla ricerca di una funziona foo che sia lanciabile dal "suo contesto" (quello dove è defintio test),
 * quindi public o preotected. Non la trova
 * ed esegue la sua locale. Con static il contesto di A è costretto a lanciare quella propria della
 * classe di cui è istanza $this, ed essendo private non può eseguirla e da errore.
 *
 */
class A {
    private function foo() {
        echo "successo!\n";
    }
    public function test() {
        $this->foo();
        static::foo();
    }
}

class B extends A {
    /*
     * foo() will be copied to B, hence its scope will still be A and
     * the call be successful
     */
}

class C extends A {
    private function foo() {
        /* original method is replaced; the scope of the new one is C */
        echo "successone!\n";
    }
}

$b = new B();
$b->test();
//successo!
//successo!
$c = new C();
$c->test();
//successo
//PHP Fatal error:  Call to private method C::foo() from context 'A'

/*
 * Se solo la function foo di C fosse stata protected, avrebbe stampato successone.
 * e lo stesso con public ovviamente
 */