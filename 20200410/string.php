<h1>字串處理</h1>
<hr>
<h5>1.子字串 substr() / mb_substr()</h5>
<?php
    $s = "hello world";
    echo substr($s,6,3)."<br>";
    $s2 = "今天天氣可真好";
    echo substr($s2,3).'<br>';
    echo mb_substr($s2,2,3);
    $a=array("a"=>"Cat","b"=>"Dog","c"=>"Cat");
    print_r(array_unique($a));
    ?>