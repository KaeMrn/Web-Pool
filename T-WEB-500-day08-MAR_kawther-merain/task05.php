<?php
function calc_average(array $numbers){
    if (empty($numbers)){
        return null;
    }
   $sum = array_sum($numbers);
   $average = round($sum / count($numbers), 1);
   return $average;
}
?>