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
    echo "<br>";
    
    $a = 10;
    echo ($a<20)?"太貴":"很值";
    ?>
    
    
