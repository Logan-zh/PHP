    @extends('top')

    @section('title','My site back')

    @section('container')
    

    
    <div class="in-box">
        <form action="porfolio/edit-in" method="post" enctype="multipart/form-data">
        @foreach($introduction as $in)
        <div>
            <label for="i-content">內容:</label>
            <textarea id="i-content" name="content">{{$in->content}}</textarea>
        </div>
        <div>
            <label for="i-img">縮圖:</label>{{$in->img}}
            <input id="i-img" type="file" name="img" value="">
        </div>
        <div>
            @csrf
            <input type="submit" value='送出'>
            </div>
        @endforeach
        </form>
    </div>

    <div class="item-box">
    @foreach($porfolio as $p)

        <div class="item">
            <a href="{{$p->site}}">
            <div class="item-image"><img src="{{asset('storage/img')."/".$p->img}}"></div>
            <div class="item-operating-area">
                <div class="item-title">{{$p->name}}</div>
                <div class="item-content">{{$p->content}}</div>
            </div>
            </a>
        </div>

    @endforeach
    </div>
    @endsection


