<?php
    $year = 2520;
    $count=[];
    for($i=2020;$i<=$year;$i++){
        if(($i%4==0 && $i%100!=0) || $i%400 ==0){
            echo '西元'.$i."為閏年";
            $count[] = $i;
        }
    }
    echo '<pre>';print_r($count);

    $test = 2443;
    if(in_array($test,$count)){
        echo $test."閏年";
    }else{
        echo $test."平年";
    }
?>