<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calendar</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <style>
        body{
            height:800px;
            overflow: hidden;
        }
        .box{
            border:solid;
            width:200px;
            height:200px;
            position:absolute;
            z-index:-1;
        }
        .left{
            transform:skew(0deg,-10deg) scale(4,4);
            top:120px;
            left:300px;
            background:linear-gradient(#bbb,#fff);
        }
        .right{
            transform:skew(0deg,10deg) scale(4,4);
            top:120px;
            left:1110px;
            background:linear-gradient(#bbb,#fff);
        }
        .bottom{
            transform:rotate(-10deg) skew(70deg,0deg) scale(4,4);
            width:300px;
            top:765px;
            left:1230px;
        }
            .containner{
                position:absolute;
                width:400px;
                height:300px;
                padding:25px;
                display:flex;
                left:200px;
                top:50px;
                justify-content:center;
                border:1px #bbb solid;
 
                transform:skew(0deg,-10deg);
            }
            .calendar{
                margin:0 10px;
            }
            .calendar table{
                border-collapse:collapse;
                margin:5px;
                background:#fff;
                box-shadow:0 0 10px #888;
            }
            .calendar td{
                padding:5px;
                text-align:center;
                height:20px;
            }
            .calendar .tyear{
                font-size:1.5rem;
            }
            .pass{
                color:#aaa;
            }
            .calendar tr:nth-child(2) td{
                background:#555;
                color:#fff;
            }
            .calendar tr:nth-child(n+3) td{
                border-bottom:1px #aaa solid;
            }
            .btn{
                position:absolute;
                bottom:5px;
                z-index:999;
            }
            .btn a{
                margin:5px;
                padding:5px;
                background:#ccc;
            }
            .people{
                height:600px;
                position:relative;
                left:570px;
                bottom:-60px;
            }
            .door{
                position:relative;
                height:700px;
                right:-700px;
                bottom:-20px;
                transform:skew(0deg,10deg)
            }
        </style>
    </head>
    <body>
    <div class="box left"></div>
    <div class="box right"></div>
    <div class="box bottom"></div>
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
            if($q < 1 ){
             $year-=1;
             $q=12;
            }
           
            $firstDay = date("$year-$q-1");
            $firstDayWeek = date('w',strtotime($firstDay));
            $days = date('t',strtotime($firstDay));
            $monE = date('F',strtotime($firstDay));
            $nextD = 1;
            $preD = date('t',strtotime('-1 month'.$firstDay));
            $between = $firstDayWeek-1;
        ?>
                    <div class="containner">
                        <div class="calendar">
                            <table>
                                <tr><td colspan=4 class="tyear"><?=$year?>年</td><td colspan=3><?=$monE?></td></tr>
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
                        for($i=0 ; $i<6 ; $i++){
                            echo "<tr>";
                            for($j=0 ; $j<7 ; $j++){
                                if($i==0 && $j< $firstDayWeek ){
                                    echo "<td class='pass'>".($preD-$between)."</td>";
                                    $between--;
                                }else{
                                    $num = $i*7+$j+1-$firstDayWeek;
                                    if($num<=$days){
                                            if($j==6 || $j==0){ 
                                                echo "<td style='color:red'>".$num."</td>";
                                            }else{
                                                echo "<td>".$num."</td>";
                                            }
                                    }else{
                                        echo "<td class='pass'>".$nextD."</td>";
                                        $nextD++;
                                    }
                                }   
                            }
                            echo "</tr>";
                        }
                    ?>          
                </table>
            </div>
                <div class="btn">
                <a href="calendar.php?year=<?=$year?>&mon=<?=$q-1?>"><i class="fas fa-arrow-left"></i></a>
                <a href="calendar.php?year=<?=$year?>&mon=<?=$q+1?>"><i class="fas fa-arrow-right"></i></a>
                </div>
        </div>
        <img class='people' src='ania.png'>
        <img class='door' src='door.png'>
    </body>
</html>