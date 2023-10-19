<?php
function sequence(int $n) {
    if ($n < 0){
        return;
    }
    echo "1" . PHP_EOL; 
    $sequence = "1";

    for ($i = 1; $i <= $n; $i++){
        $newSequence ="";
        $count = 1;

        for($j = 0; $j<strlen($sequence); $j++){
            if($j===0){
                $currentDigit = $sequence[$j];
            } else {
                $prevDigit = $sequence[$j - 1];
                $currentDigit = $sequence[$j];

                if ($currentDigit === $prevDigit){
                    $count++;
                } else {
                    $newSequence .= $count . $prevDigit;
                    $count = 1;
                }
            }
        }
        $newSequence .= $count . $currentDigit;
        $sequence = $newSequence;
        echo $sequence . PHP_EOL;
    }
}
?>