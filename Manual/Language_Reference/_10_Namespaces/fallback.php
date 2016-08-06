<?php
/**
 * Created by IntelliJ IDEA.
 * User: ColomboM
 * Date: 15/10/14
 * Time: 15:54
 *
 * Inside a namespace, when PHP encounters an unqualified Name in a class name,
 * function or constant context, it resolves these with different priorities.
 * Class names always resolve to the current namespace name.
 * Thus to access internal or non-namespaced user classes,
 * one must refer to them with their fully qualified
 *
 * Calls to fully qualified functions, classes or constants are resolved at compile-time.
 * For instance new \A\B resolves to class A\B.
 * All unqualified and qualified names (not fully qualified names) are translated during compilation
 * according to current import rules. For example, if the namespace A\B\C is imported as C, a
 * call to C\D\e() is translated to A\B\C\D\e().
 * Inside a namespace, all qualified names not translated according to import rules have the current
 * namespace prepended. For example, if a call to C\D\e() is performed within namespace A\B, it
 * is translated to A\B\C\D\e().
 * Unqualified class names are translated during compilation according to current import rules
 * (full name substituted for short imported name). In example, if the namespace A\B\C is
 * imported as C, new C() is translated to new A\B\C().
 * Inside namespace (say A\B), calls to unqualified functions are resolved at run-time. Here
 * is how a call to function foo() is resolved:
 * It looks for a function from the current namespace: A\B\foo().
 * It tries to find and call the global function foo().
 * Inside namespace (say A\B), calls to unqualified or qualified class names (not fully
 * qualified class names) are resolved at run-time. Here is how a call to new C() or
 * new D\E() is resolved. For new C():
 * It looks for a class from the current namespace: A\B\C.
 * It attempts to autoload A\B\C.
 * For new D\E():
 * It looks for a class by prepending the current namespace: A\B\D\E.
 * It attempts to autoload A\B\D\E.
 * To reference any global class in the global namespace, its fully qualified name new \C() must be used.
 */
  namespace A\B {
      new C();

      /* E' inutile inserirla qui. va messa solo a livello global
      function __autoload($class_name) {
          echo "ma trovi la classe -->" . $class_name . "?",PHP_EOL;
      }*/
  }

  namespace {
      function __autoload($class_name) {
          echo "ma trovi la classe -->" . $class_name . "?",PHP_EOL;
      }
  }
/*
ma trovi la classe -->A\B\C?

Fatal error: Class 'A\B\C' not found in ...

 */