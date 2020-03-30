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

    <div class="item-box-back">
        
    @foreach($porfolio as $p)
        <form action="porfolio_back/edit/{{$p->id}}" method="post" enctype="multipart/form-data">
        <div class="item-back">
            <div class="item-image-back"><img src="{{asset('img')."/".$p->img}}"></div>
            <div class="item-operating-area-back">
                <input name="img" type="file">
                <input name="name" type="text" value="{{$p->name}}">
                <input name="content" type="text" value="{{$p->content}}">
                @csrf
                <input type="submit">
            </div>
        </div>
        </form>
    @endforeach
        
    </div>
    @endsection


