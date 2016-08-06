<?php
  class A {
      private   $privato;
      private   $privatoA;
      protected $protetto;
      protected $protettoA;
      public $pubblicoA;
      public $pubblico;
  }

  class B extends A {
        private   $privato;
        protected $protetto;
        public $pubblico;
  }

  $b = new B();

  $a = (array) $b;
  var_dump($a);
/*
array(7) {
  '\0B\0privato'   =>  NULL
  '\0*\0protetto'  =>  NULL
  'pubblico'       =>  NULL
  '\0A\0privatoA'  =>  NULL
  '\0*\0protettoA' =>  NULL
  'pubblicoA'      =>  NULL
  '\0A\0privato'   =>  NULL
}
 */