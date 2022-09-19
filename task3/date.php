<?php 
    $hr=0;
    $min=0;
    $sec=0;
    for($i = 0; $i <= 24; $i++) {
        for($j = 0; $j < 60; $j++){
            if($j % 3 == 0){
                echo date('Y'."-".'m'."-".'d'." ")." T ".(int)$i.":".(int)$j.":".$sec."<br/>";
            }
            if($i == 24) break;
        }
    }
?>