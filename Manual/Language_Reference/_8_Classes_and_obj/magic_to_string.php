<?php

class Car {
    public function __toString() {
        /* la echo darebbe un fatal error:
          My Car<br />
          <b>Catchable fatal error</b>:  Method Car::__toString() must return a string value in <b>[...][...]</b> on line <b>10</b><br />
         */
        //echo 'My Car';
        return 'My Car';
    }
}

$o = new Car();
echo $o; //Echos 'My Car'
