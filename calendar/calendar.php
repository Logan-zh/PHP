<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calendar</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <link rel="stylesheet" href="css/style.css">
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
        <img class='people' src='img/ania.png'>
        <div class="dor">
        <img src="img/cl.png" alt="">
                <div class="window">
                    <div class="ceil"></div>
                    <div class="ceil"></div>
                    <div class="ceil"></div>
                    <div class="ceil"></div>
                </div>
        </div>
        <div class="sofa">
            <img src="https://freesvg.org/img/Sofa-lineart.png" alt="">
        </div>
    </body>
</html>