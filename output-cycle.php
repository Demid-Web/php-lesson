<?php
    $secondArg = "hello, Im span!";
    $firstArg = "<span>$secondArg</span>";
    $countArg = 11;

    function outputCycle($firstArg, $secondArg, $countArg){
        for ($i=0; $i < $countArg; $i++) { 
            echo $firstArg;
        }
    }
    outputCycle($firstArg, $secondArg, $countArg);
?>