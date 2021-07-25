<?php 

abstract class ShapeFactory {
    
    // Static method that creates objects:
    static function Create($type, array $sizes) {
        
        // Determine the object type based upon the parameters received.
        switch ($type) {
            case 'rectangle':
                return new Rectangle($sizes[0], $sizes[1]);
                break;
            case 'triangle':
                return new Triangle($sizes[0], $sizes[1], $sizes[2]);
                break;
        } // End of switch.
         
    } // End of Create() method.

} // End of ShapeFactory class.