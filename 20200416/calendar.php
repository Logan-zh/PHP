<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
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
                padding:10%;
            }
            .calandar{
                margin:0 10px;
            }
            table{
                border-collapse:collapse;
                margin:5px;
                background:#fff;
            }
            td{
                border:1px #aaa solid;
                padding:5px;
                text-align:center;
                height:20px;
            }
            .tyear{
                text-align:center;
                font-size:2rem;
                color:
            }
        </style>
    </head>
    <body>
        <form action="?" method='GET'>
            <input type="number" name="year" id="">
            <input type="submit" value="產生年曆">
        </form>
        <?php 
            if(isset($_GET['year'])){
                $year = $_GET['year'];
            }else{
                $year = date('Y');
            }
        ?>
        <div class="tyear">年分:<?=$year?></div>
        <div class="containner">
            <?php for($q=1 ;$q<=12;$q++){ ?>
            <div class="calandar">
                <table>
                    <tr><td colspan=7><?=$q?>月</td></tr>
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
                        $firstDay = date("$year-$q-1");
                        $firstDayWeek = date('w',strtotime($firstDay));
                        $days = date('t',strtotime($firstDay));
                        for($i=0 ; $i<6 ; $i++){
                            echo "<tr>";
                            for($j=0 ; $j<7 ; $j++){
                                if($i==0 && $j< $firstDayWeek ){
                                    echo "<td></td>";
                                }else{
                                    $num = $i*7+$j+1-$firstDayWeek;
                                    if($num<=$days){
                                            if($j==6 || $j==0){ 
                                                echo "<td style='color:red'>".$num."</td>";
                                            }else{
                                                echo "<td>".$num."</td>";
                                            }
                                    }else{
                                        echo "<td></td>";
                                    }
                                }   
                            }
                            echo "</tr>";
                        }
                    ?>          
                </table>
            </div>
            <?php }?>
        </div>
    </body>
</html>