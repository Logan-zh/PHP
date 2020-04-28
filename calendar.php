<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>萬年曆</title>
        <style>
            body{
                background:#eee;
                padding:5px;
            }
            .containner{
                display:flex;
                flex-wrap:wrap;
                justify-content:center;
                border:1px #bbb solid;
                border-radius:2%;
                padding:10px;
            }
            .calendar{
                display:flex;
                flex-direction:column;
                flex-wrap:wrap;
                justify-content:center;
            }
            .calendar table{
                border-collapse:collapse;
                background:#fff;
                border-radius:50px;
                box-shadow:0 0 5px #888;
            }
            .calendar table td{
                padding:20px;
                text-align:center;
                height:50px;
                width:100px;
                font-size:2.5rem;
            }
            .calendar table tr:nth-child(2) td{
                background:#888;
                color:#fff;
            }
            .calendar table tr:nth-child(n+3) td{
                border-bottom:1px #eee solid;
            }
            .calendar .btn{
                margin-top:10px;
                width:100%;
                display:flex;
            }
            .calendar .btn a{
                flex:1;
                display:inline-flex;
                width:100px;
                height:50px;
                background:#fff;
                justify-content:center;
                align-items:center;
                color:#03f;
                font-weight:bolder;
                border-radius:5%;
                border:1px #0af solid;
                box-shadow:
                            inset 0 0 5px #aaa;
                margin:10px 0 0 20px;
            }
            .nextMon{
                color:#aaa;
                border-bottom:none;
            }
            .calendar .tyear ,.calendar .tmon{
                font-size:5rem;
            }
        </style>
    </head>
    <body>
        <?php
            if(isset($_GET['year'])){
                $year = $_GET['year'];
            }else{
                $year = date('Y');
            }
            if(isset($_GET['mon'])){
                $q = $_GET['mon'];
            }else{
                $q = date('m');
            }
            if($q > 12){
                $year+=1;
                $q=1;
            }
            if($q <= 0){
                $year-=1;
                $q=12;
            }
            $mm = date('F',strtotime("$year-$q-1"));
        ?>

        <div class="containner">

            <div class="calendar">
                <table>
                    
                    <tr>
                        <td colspan=4 class="tyear"><?=$year?>年</td>
                        <td colspan=3 class="tmon"><?=$mm?></td>
                    </tr>
                    <tr>
                        <td>日</td>
                        <td>一</td>
                        <td>二</td>
                        <td>三</td>
                        <td>四</td>
                        <td>五</td>
                        <td>六</td>
                    </tr>
                    <?php

                        $a = 1;
                        $firstDay = date("$year-$q-1");
                        $firstDayWeek = date('w',strtotime($firstDay));
                        $days = date('t',strtotime($firstDay));

                        $ndays = date('t',strtotime("-1 year".$firstDay));
                        $mq = $firstDayWeek;
                        for($i=0 ; $i<6 ; $i++){
                            echo "<tr>";
                            for($j=0 ; $j<7 ; $j++){
                                if($i==0 && $j< $firstDayWeek ){
                                    $mm =$ndays - $mq+1;
                                    echo "<td class='nextMon'>".$mm."</td>";
                                    $mq-=1;
                                }else{
                                    $num = $i*7+$j+1-$firstDayWeek;
                                    if($num<=$days){
                                            if($j==6 || $j==0){ 
                                                echo "<td style='color:red'>".$num."</td>";
                                            }else{
                                                echo "<td>".$num."</td>";
                                            }
                                    }else{
                                        echo "<td class='nextMon'>".$a."</td>";
                                        $a++;
                                    }
                                }   
                            }
                            echo "</tr>";
                        }
                    ?>          
                </table>
                <div class="btn">
                    <a href="calendar.php?mon=<?=$q-1?>&year=<?=$year?>">Previous mon</a>
                    <a href="calendar.php?mon=<?=date('n')?>&year=<?=date('Y')?>">當月</a>
                    <a href="calendar.php?mon=<?=$q+1?>&year=<?=$year?>">Next mon</a>
                </div>
            </div>

        </div>
    </body>
</html>