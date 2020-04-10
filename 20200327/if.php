<?php
    $score=60;
    // if($score>=60){
    //     echo "及格";
    // }else{
    //     echo "不及格";
    // }
    $result = ($score>=60)?"及格":"不及格";
    echo $result;
    echo "<hr>";

    echo "成績".$score;
    echo "<br>";
    echo "等級";
    if($score>=90){
        $level = "A";
        echo $level;
    }elseif($score>=75){
        $level = "B";
        echo $level;
    }elseif($score>=60){
        $level = "C";
        echo $level;
    }elseif($score>=40){
        $level = "D";
        echo $level;
    }else{
        $level = "E";
    }
    echo "<hr>";
    // 閏年判斷
    $year=2000;
    echo "西元:".$year."<br>";

    if($year%4 ==0 && ($year%100 !=0 || $year%400 ==0)){
        echo "閏年";
    }else{
        echo "平年";
    }
    echo "<hr>";
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
