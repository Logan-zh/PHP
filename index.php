<?php
//宣告變數
    $a = 1;
    echo $a."<br>";
    $a = 10;
    $b = 2;
    $c = ($a + $b)*30;
    echo $c."<br>";
    echo gettype($c);
    print($a."<br>");
//宣告常數
    const a = 50;
    echo a."<br>";
    define("b",3);
    echo b."<br>";
    
    define("PI",3.1415926);
    echo PI."<br>";
    echo PI*20*20;
    ?>
    <style>
    table{
        border:1px solid black;
        padding:5px;
    }
    td{
        margin:20px;
        padding:10px;
        font-size:20px;
    }
    </style>
    <table><?php
    for($i=1 ; $i<=9; $i++){
        echo "<tr>";
        for($j=1; $j<=9; $j++){
            echo "<td>".$i."×".$j."=".$i*$j."</td>";
        };
        echo "</tr>";
    }?>
    </table>

