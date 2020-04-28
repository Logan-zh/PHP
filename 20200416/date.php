<style>
    td{
        border:solid;
    }
</style>
<h3>日期/時間</h3>
<div>strtotime() - 把文字日期轉乘時間序</div>
<?php
    $time = '2020-4-16 11:30:20';
    $serialtime = strtotime($time);

    echo date("Y/m/d H:i:s",$serialtime);
?>
<h4>時間練習</h4>
<div>距離下一次生日還有幾天</div>
<?php
    date_default_timezone_set('asia/taipei');
    $today=date('Y-m-d h:i:s');
    $nextBirthday='2021-2-15';
    echo $today.'<br>';
    $between = strtotime($nextBirthday)-strtotime($today);
    $days = $between/60/60/24;
    echo $days.'<br>';
?>
<h4>日期練習</h4>
<div>印出今天起三天日期</div>
<?php
    $today = date('Y-m-d');
    for($i=1 ; $i<=30 ; $i++){
        $days = strtotime("+$i day".$today);
        $theDays = date('Y-m-d',$days);
        echo $theDays.'<br>';
    }
?>