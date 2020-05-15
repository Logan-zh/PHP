<?php
    // sum(50,60,100);
    // function sum($a,$b=0,$c=0,$d=0){
    //     echo $a + $b + $c + $d;
    // }
    $n = sum(50,60,70,80);
    echo $n;
    
    function sum(...$a){
        $sum = 0;
        foreach($a as $value){
            $sum += $value;
        }
        return $sum;
    }
?>