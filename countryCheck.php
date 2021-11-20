<?php
    if($_GET["country1"] == 1) {
        echo json_encode(array ("1" => "Париж &spades;","2" => "Лион &clubs;", "3" => "Марсель &hearts;"));
    } else if($_GET["country1"] == 2) {
        echo json_encode(array ("1" => "Рим &diams;","2" => "Генуя &#9825;", "3" => "Напэлс &#9826;"));
    }  else if($_GET["country1"] == 3) {
        echo json_encode(array ("1" => "Берлин &#9828;","2" => "Касель &#9831;", "3" => "Нюнберг &euro;"));
    }
?>
