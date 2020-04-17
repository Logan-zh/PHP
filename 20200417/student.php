<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .rollback{
            text-decoration:none;
            border:1px solid;
            padding:2px;
            background:linear-gradient(#fff,#eee);
            color:#555;
        }
    </style>
</head>
<body>
    <?php
        $score = [
            '01' => [
                '國文' => 39,
                '英文' => 49,
                '數學' => 59,
            ],
            '02' => [
                '國文' => 36,
                '英文' => 46,
                '數學' => 56,
            ],
            '03' => [
                '國文' => 27,
                '英文' => 37,
                '數學' => 47,
            ],
            '04' => [
                '國文' => 61,
                '英文' => 51,
                '數學' => 41,
            ],
            '05' => [
                '國文' => 44,
                '英文' => 54,
                '數學' => 64,
            ],
        ];

        if(isset($_GET['number'])){
            if(isset($score[$_GET['number']])){
                $number = $_GET['number'];
                echo '座號:'.$number.'的成績<br>';
                $student = $score[$number];
                echo '國文'.$score[$number]['國文'].'分<br>';
                echo '英文'.$score[$number]['英文'].'分<br>';
                echo '數學'.$score[$number]['數學'].'分<br>';
            }else{
                echo '不存在';
            }
        }else{
            echo '<span style="color:red;font-weight:bolder">請提供學生座號';
        }
    ?>
    <form action="?" method='GET'>
        <input type="number" name="number">
        <input type="submit" value="查詢">
        <a class='rollback' href="student2.php">回學生列表</a>
    </form>
</body>
</html>