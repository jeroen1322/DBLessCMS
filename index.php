<?php
    $string=file_get_contents("articles.json");
    $json = json_decode($string, true);

    foreach($json as $i){
        echo "<strong>".$i['name'].":</strong> <br>".$i['article']."<br><br>";
    }
