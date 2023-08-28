<?php

for($j = 1; $j <= 5; $j++){
    for($i = 1; $i <= 5; $i++){
        if(($i + $j) <= 5){
            echo " ";
        }else {
            echo "*";
        }
    }
    echo "\n";
}

?>