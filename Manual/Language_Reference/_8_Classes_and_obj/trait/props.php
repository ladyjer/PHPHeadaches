<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/10/14
 * Time: 4:28 PM
 *
 * If a trait defines a property then a class can not define a property with the same name,
 * otherwise an error is issued. It is an E_STRICT if the class definition
 * is compatible (same visibility and initial value) or fatal error otherwise.
 */

 trait T1 {
     public $a;
     public $b;
     protected $c;
 }

 class A {
     //protected $a;//PHP Fatal error:  A and T1 define the same property ($a) in the composition of A.
                  //However, the definition differs and is considered incompatible
     public $b;   //Strict standards: A and T1 define the same property ($b)
                  //in the composition of A. This might be incompatible, to improve
                  //maintainability consider using accessor methods in traits instead.
     //public $c;   //PHP Fatal error:  A and T1 define the same property ($c) in the composition of A. However, the definition differs and is considered incompatiblePHP Fatal error:
                  //A and T1 define the same property ($c) in the composition of A.
                  //However, the definition differs and is considered incompatible

     use T1;
 }