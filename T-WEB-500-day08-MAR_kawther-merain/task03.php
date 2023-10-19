<?php
function get_shortest(array $strings){
    if (empty($strings)){
        return null;
    }
    $shortest = $strings[0];
    foreach($strings as $string){
        if (strlen($string) < strlen($shortest)){
            $shortest = $string;
        }

    }
    return $shortest;

}
?>