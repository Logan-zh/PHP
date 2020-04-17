<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>表單傳值</title>
    <style>
        body{
            display:flex;
            justify-content:center;
            padding:50px;
        }
        form{
            margin:20px 0;
        }
    </style>
</head>
<body>
<div class="containner">
    <?php
        if(isset($_GET['height']) && isset($_GET['weight'])){
            $height = $_GET['height'];
            $weight = $_GET['weight'];
            if(!empty($height) && !empty($weight)){
                $bmi = $weight/pow($height/100,2);
                echo '你輸入的身高是:'.($height).'<br>';
                echo '你輸入的體重是:'.$weight.'<br>';
                echo 'BMI為:'.round($bmi,1).'<br>';
                if($bmi < 18.5){
                    echo '體重過輕';
                }elseif($bmi < 24){
                    echo '你很健康';
                }elseif($bmi < 27){
                    echo '輕度非胖';
                }elseif($bmi < 30){
                    echo '中度肥胖';
                }elseif($bmi <35){
                    echo '重度肥胖';
                }
            }else{
                echo '請輸入正確的值';
            }
        }
    ?>
    <form action="?" method='GET'>
        身高:<input name="height" type="number" placeholder='公分' step="0.1"><br>
        體重:<input name="weight" type="number" placeholder='公斤' step="0.1"><br>
        <input type="submit" value="送出">
    </form>
</div>
</body>
</html>