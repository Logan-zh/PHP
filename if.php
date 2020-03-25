<?php
    $score=50;
    if($score>=60){
        echo "及格";
    }else{
        echo "不及格";
    }
    echo "<hr>";

    $score=70;
    echo "成績".$score;
    echo "<br>";
    echo "等級";
    if($score>=90){
        echo "A";
    }elseif($score>=75){
        echo "B";
    }elseif($score>=60){
        echo "C";
    }else{
        echo "D";
    }
    echo "<hr>";
    // 閏年判斷
    $year=2000;
    echo "西元:".$year."<br>";
    // if($year%4 ==0 && $year%100 !=0)){
    //     echo "閏年";
    // }else{
    //     echo "平年";
    // }

    // if($year<3200){
    //     if($year%4 ==0 && $year%100 !=0){
    //         echo "閏年";
    //     }else{
    //         echo "平年";
    //     }
    // }else{
    //     if($year%100 ==0 && $year%3200 !=0){
    //         echo "閏年";
    //     }else{
    //         echo "平年";
    //     }
    // }
    if($year%4 ==0 && ($year%100 !=0 || $year%400 ==0)){
        echo "閏年";
    }else{
        echo "平年";
    }
    echo "hr";
    $level="A";
    echo "<br>";
    switch($level){
        case "A":
            echo "非常好，繼續保持";
        break;
        case "B":
            echo "可圈可點，還有進步空間";
        break;
        case "C":
            echo "一般一般，需更加努力";
        break;
        case "D":
            echo "完全不足，請多加強";
        break;
        default:
            echo "你就爛!";
    }
    ?>
