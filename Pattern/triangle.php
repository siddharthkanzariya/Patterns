<?php

//j is represent number of rows


for($j = 1; $j <= 5; $j++){
    for($space = 1; $space <= (5 - $j); $space++){
        echo " ";
    }
    for ($i = 1; $i <= $j; $i++) { 
        echo "* ";
    }
    echo "\n";
}

?>