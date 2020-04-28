<h4>威力彩號碼</h4>
<hr>
<?php
$num = [];
$num2 = [];
$count = 0;
    for($i=0 ; $i<6 ; $i++){
        $num[] = rand(1,38);
        for($j=0 ;$j<$i ;$j++){
                while($num[$i] ==  $num[$j]){
                    $count++;
                    echo "第".$i."個重複了,數值:".$num[$i].'<br>';
                $num[$i] = rand(1,49);
                }
        }
    }
    echo "重複了".$count.'次<br>';
    foreach($num as $n){
        echo $n.',';
    }
    echo "<br>";
    for($i=0;$i<6;$i++){
        $a = rand(1,49);
        while(in_array($a,$num)){
            $a = rand(1,49);
        }
        $num2[]=$a;
    }

    foreach($num2 as $n){
        echo $n.",";
    }
    echo "<pre>";print_r($num);
?>