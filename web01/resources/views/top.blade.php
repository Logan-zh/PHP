<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','a title')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="{{asset('js/js.js')}}"></script>
</head>
<body>
    <div class="nav">
        <div class="brand">@yield('title','a title')</div>

            @if(!empty(session()->get('name')))
            <ul class="manage-box" id="sign-box">
            <li class='dropdown' href="#"><a href="#">設定</a>
                <ul>
                    <li><a href="porfolio/edit-in">介紹</a></li>
                    <li><a href="porfolio/create">新增</a></li>
                    <li><a href="">刪除</a></li>
                </ul>
            </li>
            <li><a href="porfolio_back">回主頁</a></li>
            <li><a href="sign_out">登出</a></li>
            </ul>
            @else
            <button class="sign-btn">後臺管理</button>
            <div class="sign-box" id="sign-box">
            <form action="porfolio_back" method="post">
                <label for="name">account</label>
            <input id="name" type="text" name="name" placeholder="name">
                <label for="password">password</label>
            <input id="password" type="text" name="password" placeholder="password">
            @csrf
            <input type="submit" value="送出">
            </form>
            </div>
            @endif
        
    </div>
        @yield('container','something')
</body>
</html>
