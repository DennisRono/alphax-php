<?php
    class shape{
        public $PI;
        public $r;
        public $length;
        public $width;
        function __construct($PI, $r, $length, $width) {
            $this->PI = $PI;
            $this->r = $r;
            $this->length = $length;
            $this->width = $width;
        }

        function area(){
            $area = $this->PI * $this->r * $this->r;
            return "The area of the circle is: ".$area;
        }
        
    }
    // $rad = new shape(3.142, 7);
    // echo $rad->area();

    class rectangle extends shape{
        function rect_area(){
            $r_area = $this->length * $this->width;
            return "The area of the rectangle is: ".$r_area;
        }
    }
    $len = new rectangle(3.142, 7, 20, 57);
    echo $len->rect_area();
    echo "<br>";
    echo $len->area();
?>