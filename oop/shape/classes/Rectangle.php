<?php
class Rectangle{
    public $width = 0;
    public $height = 0;

    function __construct($w = 0, $h = 0){
        $this->width=$w;
        $this->heigth=$h;
    }
    //Method to set the dimensions:
    function setSize($w=0,$h=0){
        $this->width = $w;
        $this->heigth=$h;
    }
    //Method to calculate and return the area
    function getArea(){
        return ($this->width * $this->height);
    }
    //Method to calculate and return the perimeter
    function getPerimeter(){
        return (($this->width + $this->height)*2);
    }
    //Method to determine if the rectangle is also a square
    function isSquare(){
        if($this->width == $this->height){
            return true; //Square
        } else {
            return false; //Not a square
        }
    }
} // End of Rectangle class.
?>