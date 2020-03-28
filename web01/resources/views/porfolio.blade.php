<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/js.js"></script>
</head>
<body>
    <div class="nav">
        <div class="brand">site-name</div>
        <button class="sign-btn">後臺管理</button>
        <div class="sign-box" id="sign-box">
            <form action="porfolio_back" method="POST">
            <input type="text" name="name" placeholder="name">
            <input type="text" name="password" placeholder="password">
            <input type="submit" value="送出">
            @csrf
            </form>
        </div>
    </div>
    <div class="aside">
        <img src="https://fakeimg.pl/100x100">
    </div>
    <div class="main">
        Introdution
    </div>
    <div class="item-box">
        <div class="item">
            <a href="http://localhost/loop.php">
            <div class="item-image"><img src="img/9x9.png"></div>
            <div class="item-operating-area">
                <div class="item-title">99乘法表</div>
                <div class="item-content">content</div>
            </div>
            </a>
        </div>
        <div class="item">
            <a href="http://localhost/while.php">
            <div class="item-image"><img src="img/正三角.png"></div>
            <div class="item-operating-area">
                <div class="item-title">正三角、菱形</div>
                <div class="item-content">content</div>
            </div>
            </a>
        </div>
        <div class="item">
            <div class="item-image"><img src="https://fakeimg.pl/150x150"></div>
            <div class="item-operating-area">
                <div class="item-title">title</div>
                <div class="item-content">content</div>
            </div>
        </div>
        <div class="item">
            <div class="item-image"><img src="https://fakeimg.pl/150x150"></div>
            <div class="item-operating-area">
                <div class="item-title">title</div>
                <div class="item-content">content</div>
            </div>
        </div>
        <div class="item">
            <div class="item-image"><img src="https://fakeimg.pl/150x150"></div>
            <div class="item-operating-area">
                <div class="item-title">title</div>
                <div class="item-content">content</div>
            </div>
        </div>
    </div>
</body>
</html>


