<?php
    class a
    {
        public $obj= "This is Parent Class";

        public function calc($a , $b)
        {
            return $a*$b;
        }
    }

    class b extends a
    {
        public $obj= "This is Derived Class";

        public function calc($a , $b)
        {
            return $a+$b;
        }
    }

    $trial=new a();
    echo $trial->calc(10 , 53);
?>