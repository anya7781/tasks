<?php


function check($current, $point) {
    $n = "oabcdefgh";
    $m = "012345678";

    $x1 = 0; $x2 = 0; $y1 = 0; $y2 = 0;

    for ($i = 1; $i < strlen($n); $i++){
        if ($current[0] == $n[$i]){
            $x1 = $i;
        }
        if ($point[0] == $n[$i]){
            $x2 = $i;
        }
        if ($current[1] == $m[$i]){
            $y1 = $i;
        }
        if ($point[1] == $m[$i]){
            $y2 = $i;
        }
    }

    if ($x1 == 0 || $x2 == 0 || $y1 == 0 || $y2 == 0) {
        echo "Incorrect format";
        return false;
    }

    if (abs($x1 - $x2) == abs($y1 - $y2)) {
        return true;
    }
    else {
        return false;
    }
}
