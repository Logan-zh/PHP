<h4>陣列練習-學生成績資料設計</h4>
<hr>
<?php
    // $judy = ['國文' => 95 ,'英文' => 64,70,80,25];
    // $amo = [56,98,89,23,65];
    // $join = [87,65,98,77];
    // $peter = [79,55,68,44];
    // $hebe = [99,56,35,98];

    // $score = [
    //     "judy" => [
    //         "國文" => 60,
    //         "英文" => 100,
    //     ],
    //     "amo" => [
    //         "國文" => 80,
    //         "英文" => 90,
    //     ],
    // ];

    // echo "<pre>";print_r($score);

    $score = [    
    0 => ['subject','國文','英文','數學','地理','化學'],
    1 => ['judy',99,88,79,85,68],
    2 => ['amo',97,89,77,68,55],
    3 => ['john',91,89,75,86,68],
    4 => ['peter',78,83,92,76,85],
    5 => ['hebe',77,96,91,80,97],
    ];

    echo count($score);
    echo "<table>";
        for($i=0;$i<count($score);$i++){
            echo "<tr>";
            for($j=0;$j<count($score);$j++){
            echo "<td>".$score[$i][$j]."</td>";
            }
            echo "</tr>";
        }
    echo "</table>";

    $a = [];
    for($i=1 ; $i<=9 ; $i++){
        for($j=1 ; $j<=9 ; $j++){
            $a[] = $i."x".$j ."=". ($i*$j);
        }
    }
    $j = 1;
    for($i=0;$i<count($a);$i++){
        echo $a[$i].",";
        
        if($j%9 == 0){
            echo "<br>";
        }
        $j++;
    }

    foreach($a as $key =>$value){
        echo $value .",";
        if($key%9==8){
            echo "<br>";
        }
    }
?>
