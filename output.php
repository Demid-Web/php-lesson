<?php
    $secondArg = "hello, Im span!";
    $firstArg = "<span>$secondArg</span>";

    function output($firstArg, $secondArg){
        echo $firstArg;
    }
    output($firstArg, $secondArg);
?>