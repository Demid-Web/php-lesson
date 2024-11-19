<?php

    $array = [2,3,4,3,2,1,1,2,8,6,4,5];
    function couner($array){
        for ($i=0; $i < count($array) ; $i++) { 
            if ($array[$i] % 2 == 0) {
                echo $array[$i];
            }
        }
    }
    couner($array);

?>