
<?php
    $str="today is a good day";
    $find="g";

    $status=false;
    $position=0;
    while($status==false){
        $tmp=mb_substr($str,$position,1,"utf8");//利用函數mb_substr()取得某個位置字元
        if($tmp==$find){
            echo "字元".$find."在".$str."的第".$position."個位置";
            $status = true;
        }
        $position++;
    }
    echo "p=".$position;

    for($i=0;$i<6;$i++){
        for($j=0;$j<$i;$j++){
            echo "★";
        }
        echo "<br>";
    }
    echo "<hr>";

    for($i=6;$i>0;$i--){
        for($j=1;$j<$i;$j++){
            echo "★";
        }
        echo "<br>";
    }
    echo "<hr>";

    for($i=0;$i<6;$i++){

        for($k=4;$k>=$i;$k--){
            echo "&emsp;";
        }
        for($j=0;$j<=$i*2;$j++){
            echo "★";
        }
        echo "<br>";
    }
    echo "<hr>";

    for($i=0;$i<6;$i++){

        for($k=4;$k>=$i;$k--){
            echo "&emsp;";
        }
        for($j=0;$j<=$i*2;$j++){
            echo "★";
        }
        echo "<br>";
    }
    
    for($i=0;$i<5;$i++){

        for($k=0;$k<=$i;$k++){
            echo "&nbsp;&nbsp;&nbsp;";
        }
        for($j=10;$j>$i*2+1;$j--){
            echo "★";
        }
        echo "<br>";
    }

    echo "<hr>";
    for($i=0;$i<=8;$i++){
        for($j=0;$j<7;$j++){
            if($j<1 || $j>=6 || $i==0 ||$i==8){
                echo "★";
            }else{
                echo "&nbsp;&nbsp;&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }

    echo "<hr>";
    $a = 0;
    $b = 6;
    for($i=0;$i<=6;$i++){
        for($j=0;$j<7;$j++){

            if($j<1 || $j>=6 || $i==0 ||$i==6 ||$j==$a || $j==$b){
                echo "★";
            }else{
                echo "&ensp;&ensp;";
            }
        }
        $a++;
        $b--;
        echo "<br>";
    }
?>

