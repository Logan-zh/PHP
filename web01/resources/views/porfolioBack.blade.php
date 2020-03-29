    @extends('top')

    @section('title','a title')

    @section('container')
    
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


