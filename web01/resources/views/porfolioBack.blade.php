    @extends('top')

    @section('title','My site back')

    @section('container')
    

    
    <div class="in-box">
        <form action="porfolio/edit-in" method="post" enctype="multipart/form-data">
        @foreach($introduction as $in)
        <div>
            <label for="i-content">介紹:</label>
            <textarea id="i-content" name="content">{{$in->content}}</textarea>
        </div>
        <div>
            <label for="i-img">縮圖:</label>{{$in->img}}
            <input id="i-img" type="file" name="img" value="">
        </div>
        <div>
            @csrf
            <input type="submit" value='修改'>
            </div>
        @endforeach
        </form>
    </div>

    <div class="item-box-back">
        
    @foreach($porfolio as $p)
        <form action="porfolio_back/edit/{{$p->id}}" method="post" enctype="multipart/form-data">
        <div class="item-back">
            <div class="item-image-back"><img src="{{asset('storage/img')."/".$p->img}}"></div>
            <div class="item-operating-area-back">
                <label for="img">圖片:</label>
                <input id="img" name="img" type="file">
                <input type="hidden" name="id" value="{{$p->id}}">
                <label for="name">標題:</label>
                <input id="name" name="name" type="text" value="{{$p->name}}">
                <label for="content">內容:</label>
                <input id="content" name="content" type="text" value="{{$p->content}}">
                @csrf
                <input type="submit" value="修改">
            </div>
        </div>
        </form>
    @endforeach
        
    </div>
    @endsection


