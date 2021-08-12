<?php
    class a
    {
        public $obj= "This is Parent Class";
    }

    class b extends a
    {
        public $obj= "This is Derived Class";
    }

    $trial=new b();
    echo $trial->obj;
?>