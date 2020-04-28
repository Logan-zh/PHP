<h4>字串函式練習</h4>
<div>字串 aabb11233</div>
<?php
    $str = 'abcd123';
    $str2 = '';
    for($i=0;$i<strlen($str);$i++){
        $str2 = $str2.'*';
        echo "i=" . $i . "=>" .$str2 . "<br>";
    }
    echo $str2;
    echo "<hr>";
    $str3 = '123';
    $str3 = str_repeat('*',strlen($str));
    echo $str3;
    echo '<hr>';
    echo str_repeat('好',20);
    
?>
<h4>字串切割</h4>
<?php
    $str = 'this,is,a,book';
    $strArray = explode(',',$str);
    echo '<pre>';print_r($strArray);
    echo $strArray[3].'<br>';
    echo join(' ',$strArray)
?>
<h4>join / implode 合併字串</h4>
<hr>
<?php
    $str = 'The reason why a great man is great is that he resolves to be a great man';
    echo $sub = substr($str,0,10);
    if(strlen($str)>10){
        echo '...';
    }
?>