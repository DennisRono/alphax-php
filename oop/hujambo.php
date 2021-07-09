<?php
    /* The Hujambo class says "Hujambo" in different languages.*/
    class Hujambo{
        function hujambo($language = 'Kiswahili') {
            echo '<p>';
            switch ($language) {
                case 'Luhya':
                    echo 'Uvendi!';
                    break;
                case 'Kikuyu':
                    echo 'Nikwega';
                    break;
                case 'Kisii':
                    echo 'Mbeamno!';
                    break;
                case 'Luo':
                    echo 'nango!';
                    break;
                case 'Kalenjin':
                    echo 'Chamgei!';
                    break;
            } //End of switch.
            echo '</p>';
        }
    }
?>