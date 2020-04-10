<style>
    *{font-family:"Courier New";}
</style>
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
            echo "&nbsp;";
        }
        for($j=0;$j<=$i*2;$j++){
            echo "*";
        }
        echo "<br>";
    }
    echo "<hr>";

    for($i=0;$i<6;$i++){

        for($k=4;$k>=$i;$k--){
            echo "&nbsp;";
        }
        for($j=0;$j<=$i*2;$j++){
            echo "*";
        }
        echo "<br>";
    }
    
    for($i=0;$i<5;$i++){

        for($k=0;$k<=$i;$k++){
            echo "&nbsp;";
        }
        for($j=10;$j>$i*2+1;$j--){
            echo "*";
        }
        echo "<br>";
    }

    echo "<hr>";
    for($i=0;$i<=7;$i++){
        for($j=0;$j<7;$j++){
            if($j<1 || $j>=6 || $i==0 ||$i==7){
                echo "*";
            }else{
                echo "&nbsp;";
            }
        }
        echo "<br>";
    }

    echo "<hr>";
    $a = 0;
    $b = 10;
    $x = 10;
    for($i=0;$i<=$x;$i++){
        for($j=0;$j<=$x;$j++){

            if($j<1 || $j>=$x || $i==0 ||$i==$x ||$j==$a || $j==$b){
                echo "*";
            }else{
                echo "&nbsp;";
            }
        }
        $a++;
        $b--;
        echo "<br>";
    }
?>

